<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use Illuminate\Contracts\Auth\Guard;

use App\Http\Requests;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;

class AdminLoginController extends Controller
{
	public function __construct()
    {
        $this->middleware('guest:admin');
    }
    public function showLoginForm()
    {
        return view('admin.pages.login');
    }

    public function postLogin(Request $request)
    {
    	//validation
        $this->validate($request, [
        	'email' => 'required|email',
        	'password' => 'required|min:6'
        ]);

        // if credentials are okay 

        if(Auth::guard('admin')->attempt(['email' => $request->email, 'password' => $request->password], $request->remember)) {
        	return redirect()->intended(route('admin.dashboard'));
        }

        // if unsuccesfull
        return redirect()->back()->withInput($request->only('email', 'remember'));

    }
    public function logout(Request $request) {
    	$this->guard()->logout();

	    $request->session()->flush();

	    $request->session()->regenerate();

    	return redirect()->route('admin.login');
    }
}
