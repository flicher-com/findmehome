<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

/**
 * With Subdomain
 */


Route::group(['middleware' => 'country'], function () {


    Route::get('/test', function (Illuminate\Http\Request $request) {
        return $request->session()->get('country');
    });

    /**
     * Start Main
     */

    Route::get('/', ['as' => 'landing', 'uses' => 'PagesController@landing']);

    $a = 'user.';
    Route::get('/home', ['as' => $a . 'home', 'uses' => 'HomeController@index']);

    /**
     * Login, Registration, Password reset
     */
    $a = 'auth.';
    Route::get('/login',            ['as' => $a . 'login',          'uses' => 'Auth\AuthController@getLogin']);
    Route::post('/login',           ['as' => $a . 'login-post',     'uses' => 'Auth\AuthController@postLogin']);
    Route::get('/register',         ['as' => $a . 'register',       'uses' => 'Auth\AuthController@getRegister']);
    Route::post('/register',        ['as' => $a . 'register-post',  'uses' => 'Auth\AuthController@postRegister']);
//Route::get('/password',         ['as' => $a . 'password',       'uses' => 'Auth\PasswordController@getPasswordReset']);
    Route::post('/password',        ['as' => $a . 'password-post',  'uses' => 'Auth\PasswordController@postEmail']);
    Route::get('/password/reset/{token}', ['as' => $a . 'reset',          'uses' => 'Auth\PasswordController@getReset']);
    Route::post('/password/reset',['as' => $a . 'reset-post',     'uses' => 'Auth\PasswordController@postReset']);



    $a = 'authenticated.';
    Route::get('/logout', ['as' => $a . 'logout', 'uses' => 'Auth\AuthController@getLogout']);

    /**
     * Admin Panel
     */
    $a = 'admin';
    Route::get('/admins/login', 'Auth\AdminLoginController@showLoginForm')->name('admin.login');
    Route::post('/admins/login', 'Auth\AdminLoginController@postLogin')->name('admin.login-submit');
    Route::get('/admins/logout', 'Auth\AdminLoginController@logout')->name('admin.logout');

    Route::get('/admins', 'AdminController@home')->name('admin.dashboard');
// Users
    Route::get('/admins/users', 'AdminController@users')->name('admin.users');
    Route::get('/admins/user/{id}', 'AdminController@user_profile')->name('admin.user-profile');


// Properties
    Route::get('/admins/properties', 'AdminController@properties')->name('admin.properties');

    Route::post('/admins/loginuser/{id}', 'AdminController@login_user')->name('admin.login.user');


    /**
     * Pages
     */
    $pa = 'pages.';
// Search
    Route::get('/search', 'PagesController@search');

// Property Details
    Route::get('/listing/{id}', ['as' => $pa . 'property-details',   'uses' => 'PagesController@p_details']);
// Send Message to Property Owner
    Route::post('/send-message', 'PagesController@send_message')->name('send.message');
    Route::post('/verify-otp', 'PagesController@verify_otp')->name('verify.message.otp');

//Route::get('/contact', 'PagesController@contact')->name('pages.contact');
Route::get('/about', 'PagesController@about')->name('pages.about');
    Route::get('/terms', 'PagesController@terms')->name('pages.terms');


    /**
     * List a new Property
     */
    $p = 'property.';
    Route::get('/new',  ['as' => $p . 'new-listing',        'uses' => 'PropertyController@newlisting']);
    Route::post('/new', ['as' => $p . 'new-listing-post',   'uses' => 'PropertyController@submitlisting']);
// Step 1 Location
    Route::get('/listing/{id}/location/edit', ['as' => $p . 'new-listing-location',   'uses' => 'PropertyController@location'])->middleware('CheckPropertyOwner');
    Route::post('/listing/{id}/location/edit', ['as' => $p . 'new-listing-location-post',   'uses' => 'PropertyController@location_post'])->middleware('CheckPropertyOwner');
// Step 2 Bedrooms
    Route::get('/listing/{id}/bedrooms/edit', ['as' => $p . 'new-listing-room',   'uses' => 'PropertyController@room'])->middleware('CheckPropertyOwner');
// PG Post
    Route::post('/listing/{id}/bedrooms/edit', ['as' => $p . 'new-listing-room-post',   'uses' => 'PropertyController@room_post'])->middleware('CheckPropertyOwner');
// House Room Post
    Route::post('/listing/{id}/rooms/edit', ['as' => $p . 'new-listing-rooms-post',   'uses' => 'PropertyController@rooms_post'])->middleware('CheckPropertyOwner');
// Commercial Property
    Route::post('/listing/{id}/commercial/edit', ['as' => $p . 'new-listing-commercial-post',   'uses' => 'PropertyController@commercial_property'])->middleware('CheckPropertyOwner');

// Step 3 Description
    Route::get('/listing/{id}/description/edit', ['as' => $p . 'new-listing-description',   'uses' => 'PropertyController@description'])->middleware('CheckPropertyOwner');
    Route::post('/listing/{id}/description/edit', ['as' => $p . 'new-listing-description-post',   'uses' => 'PropertyController@description_post'])->middleware('CheckPropertyOwner');
// Step 4 Flatshare
    Route::get('/listing/{id}/flatshare/edit', ['as' => $p . 'new-listing-flatshare',   'uses' => 'PropertyController@flatshare'])->middleware('CheckPropertyOwner');
    Route::post('/listing/{id}/flatshare/edit', ['as' => $p . 'new-listing-flatshare-post',   'uses' => 'PropertyController@flatshare_post'])->middleware('CheckPropertyOwner');
// Step 5 Photos
    Route::get('/listing/{id}/photos/edit', ['as' => $p . 'new-listing-photos',   'uses' => 'PropertyController@photos'])->middleware('CheckPropertyOwner');
    Route::post('/listing/{id}/photos/upload', ['as' => $p . 'new-listing-photos-upload',   'uses' => 'ImageController@photos_upload'])->middleware('CheckPropertyOwner');
    Route::post('/listing/{id}/photos/upload/delete', ['as' => $p . 'new-listing-photos-delete',   'uses' => 'ImageController@photos_delete']);
    Route::get('/server-images', ['as' => $p . 'new-listing-photos-get',   'uses' => 'ImageController@photos_get']);
//Step 6 Phone
    Route::get('/listing/{id}/phone/edit', ['as' => $p . 'new-listing-phone',   'uses' => 'PropertyController@phone'])->middleware('CheckPropertyOwner');
    Route::post('/listing/{id}/phone/edit', 'PropertyController@phone_post')->name('phone.post')->middleware('CheckPropertyOwner');

// SMS OTP
    Route::post('/sendotp', 'PropertyController@send_otp')->name('send.otp');
    Route::post('/verifyotp', 'PropertyController@verify_otp')->name('verify.otp');

    /**
     * Manage your property
     */
    Route::get('/listing/{id}/dashboard', ['as' => $p . 'dashboard',   'uses' => 'PropertyController@dashboard']);
    Route::post('/listing/{id}/dashboard/publish', ['as' => $p . 'publish',   'uses' => 'PropertyController@publish_property']);
    Route::post('/listing/{id}/dashboard/unpublish', ['as' => $p . 'unpublish',   'uses' => 'PropertyController@unpublish_property']);


    /**
     * User Profile
     */
    $u = 'user.';

// Profile
    Route::get('/user/{id}', ['as' => $u . 'profile', 'uses' => 'UserController@profile']);
    Route::post('/user/{id}/profile', ['as' => $u . 'profile-edit', 'uses' => 'UserController@profile_edit']);

// Account
    Route::get('/account', ['as' => $u . 'account', 'uses' => 'UserController@account']);
    Route::post('/account/update-password', ['as' => $u . 'account-password-post', 'uses' => 'UserController@account_password_post']);
    Route::post('/account/update-email', ['as' => $u . 'account-email-post', 'uses' => 'UserController@account_email_post']);

// Verifications
    Route::get('/verifications', ['as' => $u . 'verifications', 'uses' => 'UserController@verifications']);
    Route::post('/verifications/email', ['as' => $u . 'account-verifications-email-post', 'uses' => 'UserController@email_post']);
    Route::get('/verifyemail/{id}', ['as' => $u . 'email-verify', 'uses' => 'UserController@email_verify']);

// Listing
    Route::get('/user/{id}/listing', ['as' => $u . 'listing', 'uses' => 'UserController@listing']);
// Delete Listing
    Route::post('/listing/{id}/delete', ['as' => $u . 'listing.delete', 'uses' => 'UserController@listing_delete']);

// Profile Pic edit
    Route::post('/profile-pic', 'UserController@profile_pic')->name('user.profile-pic');

// Profile Name and DOB Change
    Route::post('/profile-edit', 'UserController@profile_gender_dob')->name('user.profile-gender-dob');

});


/**
 * Without Subdomain
 */


// Login via Facebook, Twitter, Google
$s = 'social.';
Route::get('/social/redirect/{provider}',   ['as' => $s . 'redirect',   'uses' => 'Auth\AuthController@getSocialRedirect']);
Route::get('/social/handle/{provider}',     ['as' => $s . 'handle',     'uses' => 'Auth\AuthController@getSocialHandle']);

Route::get('/choose-country', 'PagesController@choose_country')->name('choose.country');
Route::get('/change-country/{country}', 'PagesController@change_country')->name('country.change');
