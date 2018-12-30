<?php

namespace App\Http\Controllers\Auth;

use App\Social;
use App\User;
use Illuminate\Contracts\Auth\Guard;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Validator;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\ThrottlesLogins;
use Laravel\Socialite\Facades\Socialite;

class AuthController extends Controller
{
    use ThrottlesLogins;

    protected $auth;
    protected $userRepository;

    public function __construct(Guard $auth)
    {
        $this->auth = $auth;
    }

    public function getLogin()
    {
        if(Auth::check()) {
            return redirect()->route('landing');
        } else {
            return view('auth2.login');
        }
    }

    public function postLogin()
    {
        $email      = Input::get('email');
        $password   = Input::get('password');
        $remember   = Input::get('remember');

        if($this->auth->attempt([
            'email'     => $email,
            'password'  => $password
        ], $remember == 1 ? true : false))
        {
                return redirect()->route('landing');
        }
        else
        {
            return redirect()->back()
                ->withErrors('Incorrect email or password')
                ->withInput();
        }

    }

    public function getLogout()
    {
        \Auth::logout();

        return redirect()->route('auth.login')
            ->with('status', 'success')
            ->with('message', 'Logged out');

    }

    public function getRegister()
    {
        if(Auth::check()) {
            return redirect()->route('landing');
        } else {
            return view('auth2.register');
        }
    }

    public function postRegister()
    {
        $input = Input::all();
        $validator = Validator::make($input, User::$rules, User::$messages);
        if($validator->fails())
        {
            return redirect()->back()
                ->withErrors($validator)
                ->withInput();
        }

        $data = [
            'first_name'    => $input['first_name'],
            'last_name'     => $input['last_name'],
            'email'         => $input['email'],
            'password'      => $input['password']
        ];

        $user = new User;
        $user->email            = $data['email'];
        $user->first_name       = ucfirst($data['first_name']);
        $user->last_name        = ucfirst($data['last_name']);
        $user->password         = Hash::make($data['password']);
        $user->save();

        $credentials = array(
            'email' => Input::get('email'),
            'password' => Input::get('password')
        );

        $confirm_code = str_random(30);
        $user->email_token = $confirm_code;
        $user->save();

        Mail::send('mail.welcome', ['confirm_code' =>$confirm_code, 'user' => $user], function($message) use($user){
            $message->from('no_reply@email.findmehome.xyz', 'Findmehome');
            $message->to($user->email, $user->first_name)
                ->subject('Welcome to Findmehome');
        });

        if (Auth::attempt($credentials)) {
            return redirect()->route('user.profile', $user->id);
        }

    }

    public function getSocialRedirect( $provider )
    {
        $providerKey = \Config::get('services.' . $provider);
        if(empty($providerKey))
            return view('pages.status')
                ->with('error','No such provider');

        return Socialite::driver( $provider )->redirect();

    }

    public function getSocialHandle( $provider )
    {
        $user = Socialite::driver( $provider )->user();
        if($provider == 'facebook') {
            $code = Input::get('code');
        } if($provider == 'twitter') {
            $code = Input::get('oauth_verifier');
        } if($provider == 'google') {
            $code = Input::get('code');
        }

        if(!$code) {
            return redirect()->route('auth.login')
                ->withErrors('You did not share your profile data with our socail app.');
        }

        if(!$user->email)
        {
            return redirect()->route('auth.login')
                ->withErrors('You did not share your email with our social app. You need to visit App Settings and remove our app, than you can come back here and login again. Or you can create new account.');
        }

        $socialUser = null;

        //Check is this email present
        $userCheck = User::where('email', '=', $user->email)->first();
        if(!empty($userCheck))
        {
            $socialUser = $userCheck;
        }
        else
        {
            $sameSocialId = Social::where('social_id', '=', $user->id)->where('provider', '=', $provider )->first();

            if(empty($sameSocialId))
            {
                //There is no combination of this social id and provider, so create new one
                $newSocialUser = new User;
                $newSocialUser->email              = $user->email;
                $name = explode(' ', $user->name);
                if(count($name) > 1) {
                    $newSocialUser->first_name         = $name[0];
                    $newSocialUser->last_name          = $name[1];
                } else {
                    $newSocialUser->first_name         = $name[0];
                }
                $a = '';
                if(substr($user->getAvatar(), 0, 5) == 'http:') {
                    $a = str_replace('http', 'https', $user->getAvatar());
                } else {
                    $a = $user->getAvatar();
                }

                $newSocialUser->avatar = $a;
                $newSocialUser->save();

                $socialData = new Social;
                $socialData->social_id = $user->id;
                $socialData->provider= $provider;
                $newSocialUser->social()->save($socialData);

                $socialUser = $newSocialUser;

                $confirm_code = str_random(30);
                $newSocialUser->email_token = $confirm_code;
                $newSocialUser->save();

                Mail::send('mail.welcome', ['confirm_code' =>$confirm_code, 'user' => $newSocialUser], function($message) use($newSocialUser) {
                    $message->from('no_reply@email.findmehome.xyz', 'Findmehome');
                    $message->to($newSocialUser->email, $newSocialUser->first_name)
                        ->subject('Welcome to Findmehome');
                });

            }
            else
            {
                //Load this existing social user
                $socialUser = $sameSocialId->user;
            }

        }

        $this->auth->login($socialUser, true);

        return redirect()->route('user.profile', $socialUser->id);

        return \App::abort(500);
    }

}
