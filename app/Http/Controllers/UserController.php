<?php

namespace App\Http\Controllers;

use App\Property;
use App\Propertyphotos;
use App\User;
use App\UserLanguage;
use Carbon\Carbon;
use Illuminate\Http\Request;

use App\Http\Requests;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Response;
use Illuminate\Support\Facades\Validator;
use Intervention\Image\Facades\Image;
use sendotp\sendotp;

class UserController extends Controller
{
    public function profile($id) {
        $user = User::findorfail($id);
        $strength = 0;
        if(!empty($user->description)) {
            $strength += 20;
        }
        if(!empty($user->status)) {
            $strength += 20;
        }
        if(!empty($user->activity)) {
            $strength += 20;
        }
        if(!empty($user->languages)) {
            $strength += 20;
        }

        $user->strength = $strength;
        $user->save();

        $alllanguages = UserLanguage::all();

        $ul_array= explode(';', $user->languages);
        $userlanguages = array();

        foreach ($ul_array as $ul) {
            $l = DB::table('user_languages')->where('id', $ul)->get();
            array_push($userlanguages, $l);
        }

        return view('pages.profile')
            ->with('user', $user)
            ->with('alllanguages', $alllanguages)
            ->with('userlanguages', $userlanguages);
    }
    public function profile_edit($id, Request $request)
    {
        $user = Auth::user();

        $all = Input::all();
        $profile = $all['profile'];

        if(isset($_POST['language_ids'])){
            $language = $all['language_ids'];
        }else{
            $language = array();
        }


        $language_str = implode(';', $language);

        $user->description = $request->input('description');
        $user->status = $profile['activity_type'];
        $user->activity = $request->input('activity');
        $user->languages = $language_str;
        $user->smoker = $profile['smoker'];
        $user->veg = $profile['veg'];
        $user->pets = $profile['pets'];
        $user->relationship = $profile['relationship'];


        $user->save();

        return redirect()->back();
    }

    public function profile_pic(Request $request)
    {
        $user = Auth::user();
        if($request->hasFile('avatar')){
            $avatar = $request->file('avatar');
            $filename = $user->id . '-' . time() . '.' . $avatar->getClientOriginalExtension();
            Image::make($avatar)->resize(94,94)->save( public_path('images/avatars/' . $filename ) );

            if($user->avatar != '/assets/images/default-user.png') {
                $full_path = $user->avatar;
                if ( File::exists( $full_path ) )
                {
                    File::delete( $full_path );
                }
            }

            $user->avatar = 'images/avatars/' . $filename;
            $user->save();
        }
        return redirect()->back();
    }

    public function profile_gender_dob(Request $request)
    {
        $user = Auth::user();
        $rules = array(
            'gender' => 'required',
        );
        $validator = Validator::make(Input::all(), $rules);

        if ($validator->fails()) {
            $messages = $validator->messages();
            return Redirect::back()->withErrors($validator);
        } else {
            $user->gender = $request->input('gender');
            $user->dob = $request->input('dob');
            $user->save();

            $dt = Carbon::parse($user->dob);
            $age = Carbon::createFromDate($dt->year, $dt->month, $dt->day)->diff(Carbon::now())->format('%y years');
            $user->age = $age;
            $user->save();
            return redirect()->back();
        }
    }

    public function account()
    {
        $user = Auth::user();
        return view('auth-user.user-account')
            ->with('user', $user);
    }
    public function account_password_post(Request $request)
    {
        $user = Auth::user();

        $rules = array(
            'password'              => 'required|min:6|max:20',
            'password_confirmation' => 'required|same:password',
        );

        $validator = Validator::make(Input::all(), $rules);

        if ($validator->fails()) {
            $messages = $validator->messages();
            return Redirect::back()->withErrors($validator);
        } else {
            $user->password = Hash::make($request->input('password'));
            $user->save();
            return redirect()->back();
        }
    }
    public function account_email_post(Request $request)
    {
        $user = Auth::user();

        $rules = array(
            'email'     => 'required|email|unique:users',
        );

        $validator = Validator::make(Input::all(), $rules);

        if ($validator->fails()) {
            $messages = $validator->messages();
            return Redirect::back()->withErrors($validator);
        } else {
            $user->email = $request->input('email');
            $user->save();
            return redirect()->back();
        }
    }

    public function listing($id, Request $request)
    {
        $user = User::findorfail($id);
        $country_session = $request->session()->get('country');

        if($country_session == 'ca') {
            $country = 'Canada';
        } elseif($country_session == 'in') {
            $country = 'India';
        }

        $properties = $user->properties()->where('country', $country)->get();

        return view('auth-user.listing')
            ->with('user', $user)
            ->with('properties', $properties);
    }

    public function listing_delete(Request $request, $id)
    {
        $property = Property::findorfail($id);
        $user = $property->user;

        if(Auth::user()->id == $property->user->id) {

            if($property->type == 'house') {
                $rooms = $property->rooms;
                foreach ($rooms as $room) {
                    $room->delete();
                }
            } if($property->type == 'pg') {
                $pgrooms = $property->pg->pgrooms;
                foreach ($pgrooms as $pg) {
                    $pg->delete();
                }
                $property->pg->delete();
            }
            if($property->type == 'commercial-property') {
                $property->commercial->delete();
            }

            $full_size_dir = 'images/full_size/';
            $icon_size_dir = 'images/icon_size/';

            $photos = $property->photos;

            foreach ($photos as $photo) {

                $sessionImage = Propertyphotos::where('photo_name', 'like', $photo->photo_name)->first();


                if(empty($sessionImage))
                {
                    return Response::json([
                        'error' => true,
                        'code'  => 400
                    ], 400);

                }

                $full_path1 = $full_size_dir . $sessionImage->photo_name;
                $full_path2 = $icon_size_dir . $sessionImage->photo_name;

                if ( File::exists( $full_path1 ) )
                {
                    File::delete( $full_path1 );
                }

                if ( File::exists( $full_path2 ) )
                {
                    File::delete( $full_path2 );
                }

                if( !empty($sessionImage))
                {
                    $sessionImage->delete();
                }
            }

            $property->delete();
            return redirect()->route('user.listing', $user->id)->withErrors('Property Deleted Successfully!');
        }
    }

    public function verifications()
    {
        $user = Auth::user();
        return view('auth-user.verification')
            ->with('user', $user);
    }
    public function email_post()
    {
        $user = Auth::user();
        $confirm_code = str_random(30);
        $user->email_token = $confirm_code;
        $user->save();

        Mail::send('mail.emailverify', ['confirm_code' =>$confirm_code, 'user' => $user], function($message) {
            $message->from('no_reply@email.findmehome.xyz', 'FindMeHome');
            $message->to(Auth::user()->email, Auth::user()->name)
                ->subject('Verify your email address');
        });
        return redirect()->back();
    }

    public function email_verify($id, Request $request)
    {
        $user = User::findorfail($id);
        $token = $request->input('emailtoken');

        if($token == $user->email_token) {
            $user->email_verified = 1;
            $user->save();
            return Redirect::to('/');
        } else {
            return Redirect::to('/');
        }
    }


}
