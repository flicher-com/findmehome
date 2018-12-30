<?php

namespace App\Http\Controllers;

use App\Property;
use App\User;
use Exception;
use Illuminate\Http\Request;

use App\Http\Requests;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:admin');
    }

    public function home()
    {
        return view('admin.pages.dashboard');
    }

    public function users()
    {
        $users = User::all();
        return view('admin.pages.users')
            ->with('users', $users);
    }

    public function user_profile($id)
    {
        $user = User::findorfail($id);
        return view('admin.pages.user-profile')
            ->with('user', $user);
    }

    public function properties()
    {
        $properties = Property::all();
        return view('admin.pages.properties')
            ->with('properties', $properties);
    }

    public function login_user($id)
    {
        $user = Auth::loginUsingId($id);
        if ( ! $user)
        {
            throw new Exception('Error logging in');
        } else {
            return redirect('/');
        }
    }
    
}
