<?php

namespace App\Http\Controllers;
use App\ContactMessage;
use App\Hroom;
use App\Pg;
use App\Property;
use App\User;
use function foo\func;
use Illuminate\Http\Request;

use App\Http\Requests;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Validator;

class PagesController extends Controller
{
    public function landing(Request $request) {
        //$country = $request->session()->get('country');
    	return view('pages.landing');
    }

    public function search(Request $request)
    {
        if($request->ajax()) {
            
            $country_session = $request->session()->get('country');
            if($country_session == 'ca') {
                $currency = '&#36;';
            } elseif($country_session == 'in') {
                $currency = '&#8377;';
            }
            
            $address = $request->input('address');
            $words = explode(',', $address);

            $fromlat = $request->input('fromlat');
            $tolat = $request->input('tolat');
            $fromlng = $request->input('fromlng');
            $tolng = $request->input('tolng');

            $mapview = $request->input('mapview');
            $typestr = $request->input('type');
            $commercial_typestr = $request->input('commercial-type');
            $postedbystr = $request->input('postedby');
            $min = $request->input('min');
            $max = $request->input('max');

            if($typestr == 'commercial-property') {
                $properties = Property::with(['amenities', 'commercial'])
                    ->whereHas('amenities', function ($q) use ($request) {
                        $amentiesstr = $request->input('amenities');
                        if (!empty($amentiesstr)) {
                            $amenties = explode(',', $amentiesstr);

                            for ($i = 0; $i < count(array($amenties)); $i++) {
                                $q->where($amenties[$i], 1);
                            }
                        }
                    })
                    ->whereHas('commercial', function ($q) use ($request, $commercial_typestr) {
                        if (!empty($commercial_typestr)) {
                            $commercial_type = explode(',', $commercial_typestr);

                            for ($i = 0; $i < count(array($commercial_type)); $i++) {
                                $q->orWhere('type', $commercial_type[$i]);
                            }
                        }
                    })
                    ->where(function ($q) use ($mapview, $address, $words, $fromlat, $fromlng, $tolat, $tolng) {
                        if ($mapview == 0) {
                            $q->where(function ($q) use ($words) {
                                foreach ($words as $word) {
                                    $q->orWhere('city', 'LIKE', '%' . $word . '%');
                                }
                            });
                            $q->orWhere('locality', 'LIKE', '%' . $address . '%');
                            $q->orWhere('zip', 'LIKE', $address . '%');

                            $q->orWhereBetween('lat', [$fromlat, $tolat]);
                            $q->orWhereBetween('long', [$fromlng, $tolng]);
                        }
                        if ($mapview == 1) {
                            $q->whereBetween('lat', [$fromlat, $tolat]);
                            $q->whereBetween('long', [$fromlng, $tolng]);
                        }
                    })
                    // posted by
                    /*->where(function ($q) use ($postedbystr) {
                        if (!empty($postedbystr)) {
                            $postedby = explode(',', $postedbystr);

                            for ($i = 0; $i < count(array($postedby)); $i++) {
                                $q->orWhere('status', $postedby[$i]);
                            }
                        }
                    })*/
                    ->where('published', 1)
                    ->latest()
                    ->get();
                $prop = array();
                $rent = array();


                if ($min == '') {
                    $min = 0;
                }
                foreach ($properties as $p) {
                    if ($p->type == 'commercial-property') {
                        $comm_rent = $p->commercial->rent;

                        if ($max == '') {
                            if ($comm_rent >= $min) {
                                array_push($prop, $p);
                                array_push($rent, '&#8377;' . $p->commercial->rent);
                            }
                        } else {
                            if ($comm_rent >= $min && $comm_rent <= $max) {
                                array_push($prop, $p);
                                array_push($rent, '&#8377;' . $p->commercial->rent);
                            }
                        }
                    }
                }
                return response()->json(array(
                    'properties' => $prop,
                    'rent' => $rent
                ));
            }
            else
                {

                $restrictionsstr = $request->input('restrictions');
                $properties = Property::with(['amenities', 'pg', 'rooms', 'livingpeople', 'idealpeople'])
                    ->whereHas('amenities', function ($q) use ($request) {
                        $amentiesstr = $request->input('amenities');
                        if (!empty($amentiesstr)) {
                            $amenties = explode(',', $amentiesstr);

                            for ($i = 0; $i < count(array($amenties)); $i++) {
                                $q->where($amenties[$i], 1);
                            }
                        }
                    })
                    ->whereHas('idealpeople', function ($q) use ($request) {
                        $available_for = $request->input('availablefor');
                        if (!empty($available_for)) {
                            $af = explode(',', $available_for);

                            for ($i = 0; $i < count(array($af)); $i++) {
                                $q->where($af[$i], 1);
                            }
                        }
                    })
                    ->whereHas('livingpeople', function ($q) use ($restrictionsstr) {
                        if (!empty($restrictionsstr)) {
                            $restrictions = explode(',', $restrictionsstr);

                            for ($i = 0; $i < count(array($restrictions)); $i++) {
                                $q->orWhere($restrictions[$i], 1);
                            }
                        }
                    })
                    // map view or listing view
                    ->where(function ($q) use ($mapview, $address, $words, $fromlat, $fromlng, $tolat, $tolng) {
                        if ($mapview == 0) {
                            $q->where(function ($q) use ($words) {
                                foreach ($words as $word) {
                                    $q->orWhere('city', 'LIKE', '%' . $word . '%');
                                }
                            });
                            $q->orWhere('locality', 'LIKE', '%' . $address . '%');
                            $q->orWhere('zip', 'LIKE', $address . '%');

                            $q->orWhereBetween('lat', [$fromlat, $tolat]);
                            $q->orWhereBetween('long', [$fromlng, $tolng]);
                        }
                        if ($mapview == 1) {
                            $q->orWhereBetween('lat', [$fromlat, $tolat]);
                            $q->orWhereBetween('long', [$fromlng, $tolng]);
                        }
                    })
                    // type filter
                    /*->where(function ($q) use ($typestr) {
                        if (!empty($typestr)) {
                            if($typestr != '') {
                                $type = explode(',', $typestr);

                                for ($i = 0; $i < count(array($type)); $i++) {
                                    $q->orWhere('type', $type[$i]);
                                }
                            }

                        }
                    })
                    // posted by
                    ->where(function ($q) use ($postedbystr) {
                        //if ($postedbystr != '') {
                            //$postedby = explode(',', $postedbystr);

                            // for ($i = 0; $i < sizeof((array)$postedby); $i++) {
                            //     $q->orWhere('status', $postedby[$i]);
                            // }
                        //}
                    })*/
                    ->where('published', 1)
                    ->latest()
                    ->get();

                $prop = array();
                $rent = array();


                if ($min == '') {
                    $min = 0;
                }
                foreach ($properties as $p) {
                    if($country_session == 'in') {

                        if ($p->type == 'pg') {

                            $pgrent = array();
                            $pg = $p->pg;

                            $pgrooms = $pg->pgrooms;

                            $pgrent = array();

                            for ($i = 0; $i < count((array)$pgrooms); $i++) {
                                array_push($pgrent, $pgrooms[$i]->rent);
                                //print_r($pgrooms[$i]['rent']);
                            }

                            if ($max == '') {
                                if (min(array_diff($pgrent, array(0))) >= $min) {
                                    array_push($prop, $p);
                                    if (min(array_diff($pgrent, array(0))) == max($pgrent)) {
                                        array_push($rent, $currency . max($pgrent));
                                    } else {
                                        $pg_min_max = array();
                                        $pg_min_max_str = '';

                                        array_push($pg_min_max, $currency . min(array_diff($pgrent, array(0))));
                                        array_push($pg_min_max, $currency . max($pgrent));

                                        $pg_min_max_str = implode(' - ', $pg_min_max);
                                        array_push($rent, $pg_min_max_str);
                                    }
                                }
                            } else {
                                if (min(array_diff($pgrent, array(0))) >= $min && min(array_diff($pgrent, array(0))) <= $max) {
                                    array_push($prop, $p);
                                    if (min(array_diff($pgrent, array(0))) == max($pgrent)) {
                                        array_push($rent, $currency . max($pgrent));
                                    } else {
                                        $pg_min_max = array();
                                        $pg_min_max_str = '';

                                        array_push($pg_min_max, $currency . min(array_diff($pgrent, array(0))));
                                        array_push($pg_min_max, $currency . max($pgrent));

                                        $pg_min_max_str = implode(' - ', $pg_min_max);
                                        array_push($rent, $pg_min_max_str);
                                    }
                                }
                            }
                        }
                        if ($p->type == 'house') {
                            $rooms = DB::table('hrooms')->where('property_id', $p->id)->get();

                            $allrent = array();
                            foreach ($rooms as $room) {
                                array_push($allrent, $room->rent);
                            }

                            if ($max == '') {
                                if (min($allrent) >= $min) {
                                    array_push($prop, $p);
                                    $min_max_str = '';
                                    $min_max = array();

                                    if (min($allrent) == max($allrent)) {
                                        array_push($min_max, $currency . max($allrent));
                                    } else {
                                        array_push($min_max, $currency . min($allrent));
                                        array_push($min_max, $currency . max($allrent));
                                    }


                                    $min_max_str = implode(' - ', $min_max);
                                    array_push($rent, $min_max_str);
                                }
                            } else {
                                if (min($allrent) >= $min && min($allrent) <= $max) {
                                    array_push($prop, $p);
                                    $min_max_str = '';
                                    $min_max = array();

                                    if (min($allrent) == max($allrent)) {
                                        array_push($min_max, $currency . max($allrent));
                                    } else {
                                        array_push($min_max, $currency . min($allrent));
                                        array_push($min_max, $currency . max($allrent));
                                    }


                                    $min_max_str = implode(' - ', $min_max);
                                    array_push($rent, $min_max_str);
                                }
                            }
                        }
                    } elseif($country_session == 'ca') {
                        if ($p->type != 'commercial-property') {
                            $rooms = DB::table('hrooms')->where('property_id', $p->id)->get();

                            $allrent = array();
                            foreach ($rooms as $room) {
                                array_push($allrent, $room->rent);
                            }

                            if ($max == '') {
                                if (min($allrent) >= $min) {
                                    array_push($prop, $p);
                                    $min_max_str = '';
                                    $min_max = array();

                                    if (min($allrent) == max($allrent)) {
                                        array_push($min_max, $currency . max($allrent));
                                    } else {
                                        array_push($min_max, $currency . min($allrent));
                                        array_push($min_max, $currency . max($allrent));
                                    }


                                    $min_max_str = implode(' - ', $min_max);
                                    array_push($rent, $min_max_str);
                                }
                            } else {
                                if (min($allrent) >= $min && min($allrent) <= $max) {
                                    array_push($prop, $p);
                                    $min_max_str = '';
                                    $min_max = array();

                                    if (min($allrent) == max($allrent)) {
                                        array_push($min_max, $currency . max($allrent));
                                    } else {
                                        array_push($min_max, $currency . min($allrent));
                                        array_push($min_max, $currency . max($allrent));
                                    }


                                    $min_max_str = implode(' - ', $min_max);
                                    array_push($rent, $min_max_str);
                                }
                            }
                        }
                    }
                }

                //return $properties;

                return response()->json(array(
                    'properties' => $prop,
                    'rent' => $rent
                ));
            }
        }

        $address = $request->input('address');
        $type = $request->input('type');
        $min = $request->input('min');
        $max = $request->input('max');

        if($type == 'any' || $type == 'apartment' || $type == 'house' || $type == 'town-house' || $type == 'private-room' || $type == 'shared-room' || $type == 'pg' || $type == 'guest-house') {
            return view('pages.search')
                ->with('address', $address)
                ->with('type', $type)
                ->with('min', $min)
                ->with('max', $max);
        }
        if($type == 'commercial-property') {
            return view('pages.commercial-search')
                ->with('address', $address)
                ->with('type', $type)
                ->with('min', $min)
                ->with('max', $max);
        } else {
            return view('pages.search')
                ->with('address', $address)
                ->with('type', $type)
                ->with('min', $min)
                ->with('max', $max);
        }
    }

    public function p_details($id) {
    	$property = Property::findorfail($id);
    	if($property->published == 1) {
            $rooms = $property->rooms;
            $pg = $property->pg;
            $commercial = $property->commercial;

            $photos = $property->photos;

            $property->views_count += 1;
            $property->save();

            return view('pages.property-details')
                ->with('property', $property)
                ->with('photos', $photos)
                ->with('pg', $pg)
                ->with('rooms', $rooms)
                ->with('commercial', $commercial);
        } else {
            if(!Auth::guest() && Auth::user()->id == $property->user->id) {
                $rooms = $property->rooms;
                $pg = $property->pg;
                $commercial = $property->commercial;

                $photos = $property->photos;
                return view('pages.property-details')
                    ->with('property', $property)
                    ->with('photos', $photos)
                    ->with('pg', $pg)
                    ->with('rooms', $rooms)
                    ->with('commercial', $commercial);
            }
        }
    }

    public function send_message(Request $request)
    {
        if($request->ajax()) {
            $country_session = $request->session()->get('country');

            if($country_session == 'ca') {
                $country_code = '1';
            } elseif($country_session == 'in') {
                $country_code = '91';
            }

            $messsages = array(
                'phoneno.required'=>'Please enter your Phone Number',
                'phoneno.min' => 'The phone number must be 10 characters.',
                'phoneno.max' => 'The phone number must be 10 characters.',
                'phoneno.unique' => 'The Phone number has already been taken, Please try different number.'
            );

            if(Auth::guest()) {
                $rules = array(
                    'firstname' => 'required',
                    'lastname' => 'required',
                    'email' => 'required',
                    'phoneno' => 'required|min:10|max:10',
                    'message' => 'required'
                );
            } else {
                $rules = array(
                    'message' => 'required'
                );
            }

            $validator = Validator::make(Input::all(), $rules,$messsages);

            if ($validator->fails()) {

                $errors = $validator->errors();
                $errors =  json_decode($errors);

                return response()->json([
                    'success' => false,
                    'message' => $errors
                ], 422);
            }


            if(Auth::guest()) {
                $phoneno = $request->input('phoneno');

                $token = rand(1000, 9000);

                $user = DB::table('users')->where('email', $request->input('email'))->update(['phone_token' => $token]);
                if(count(DB::table('users')->where('email', $request->input('email'))->first()) < 1) {
                    $new_user = new User();
                    $new_user->first_name = $request->input('firstname');
                    $new_user->last_name = $request->input('lastname');
                    $new_user->email = $request->input('email');
                    $new_user->phone_token = $token;
                    $new_user->save();
                }
                /*Send SMS using PHP*/

                //Your authentication key
                $authKey = env('MSG91');

                //Multiple mobiles numbers separated by comma
                $mobileNumber = $country_code.$phoneno;

                //Sender ID,While using route4 sender id should be 6 characters long.
                $senderId = "FMHXYZ";

                //Your message to send, Add URL encoding here.
                $message = urlencode("Your OTP is: ".$token);

                //Define route
                $route = 4;
                //Prepare you post parameters
                $postData = array(
                    'authkey' => $authKey,
                    'mobiles' => $mobileNumber,
                    'message' => $message,
                    'sender' => $senderId,
                    'route' => $route
                );

                //API URL
                $url="https://control.msg91.com/api/sendhttp.php";

                // init the resource
                $ch = curl_init();
                curl_setopt_array($ch, array(
                    CURLOPT_URL => $url,
                    CURLOPT_RETURNTRANSFER => true,
                    CURLOPT_POST => true,
                    CURLOPT_POSTFIELDS => $postData
                    //,CURLOPT_FOLLOWLOCATION => true
                ));


                //Ignore SSL certificate verification
                curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
                curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);


                //get response
                $output = curl_exec($ch);

                //Print error if any
                if(curl_errno($ch))
                {
                    echo 'error:' . curl_error($ch);
                }

                curl_close($ch);
            } else {
                $user = Auth::user();
                if($user->phone_verified == 1) {
                    $cm = new ContactMessage();
                    $cm->user_id = $user->id;
                    $cm->property_id = $request->input('propertyid');
                    $cm->message = $request->input('message');
                    $cm->phone_no = $user->phone_no;
                    $cm->save();
                } else {
                    $token = rand(1000, 9000);

                    /*Send SMS using PHP*/

                    //Your authentication key
                    $authKey = env('MSG91');

                    //Multiple mobiles numbers separated by comma
                    $mobileNumber = $country_code.$phoneno;

                    //Sender ID,While using route4 sender id should be 6 characters long.
                    $senderId = "FMHXYZ";

                    //Your message to send, Add URL encoding here.
                    $message = urlencode("Your OTP is: ".$token);

                    //Define route
                    $route = 4;
                    //Prepare you post parameters
                    $postData = array(
                        'authkey' => $authKey,
                        'mobiles' => $mobileNumber,
                        'message' => $message,
                        'sender' => $senderId,
                        'route' => $route
                    );

                    //API URL
                    $url="https://control.msg91.com/api/sendhttp.php";

                    // init the resource
                    $ch = curl_init();
                    curl_setopt_array($ch, array(
                        CURLOPT_URL => $url,
                        CURLOPT_RETURNTRANSFER => true,
                        CURLOPT_POST => true,
                        CURLOPT_POSTFIELDS => $postData
                        //,CURLOPT_FOLLOWLOCATION => true
                    ));


                    //Ignore SSL certificate verification
                    curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
                    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);


                    //get response
                    $output = curl_exec($ch);

                    //Print error if any
                    if(curl_errno($ch))
                    {
                        echo 'error:' . curl_error($ch);
                    }

                    curl_close($ch);

                    $user->phone_token = $token;
                    $user->save();
                }
            }

            return response()->json(200);
        }
    }

    public function verify_otp(Request $request)
    {
        if($request->ajax()) {

            $messsages = array(
                'otp.in' => 'OTP Mismatch, Please try again'
            );

            $otp = $request->input('otp');

            if(Auth::guest()) {
                $user = DB::table('users')->where('email', $request->input('email'))->first();
            } else {
                $user = Auth::user();
            }
            $rules = array(
                'otp' => 'required|min:4|max:4|in:'.$user->phone_token,
            );

            $validator = Validator::make(Input::all(), $rules, $messsages);

            if ($validator->fails()) {

                $errors = $validator->errors();
                $errors =  json_decode($errors);

                return response()->json([
                    'success' => false,
                    'message' => $errors
                ], 422);
            }

            $cm = new ContactMessage();
            $cm->user_id = $user->id;
            $cm->property_id = $request->input('propertyid');
            $cm->message = $request->input('message');
            $cm->phone_no = $request->input('phoneno');
            $cm->save();

            return response()->json(200);

        }
    }

    public function change_country($country, Request $request)
    {
        $country_session = $request->session()->get('country');

        if($country_session == 'ca') {
            if($country == 'in') {
                $request->session()->put('country', 'in');
                $request->session()->save();

                return redirect('https://'.$country.'.findmehome.xyz');
            }
        }
        if($country_session == 'in') {
            if($country == 'ca') {
                $request->session()->put('country', 'ca');
                $request->session()->save();

                return redirect('https://'.$country.'.findmehome.xyz');
            }
        }
        if($country_session == null) {
            $request->session()->put('country', $country);
            $request->session()->save();

            return redirect('https://'.$country.'.findmehome.xyz');
        }
    }

    public function choose_country()
    {
        return view('pages.choose-country');
    }

    public function contact()
    {
        return view('pages.contact');
    }

    public function about()
    {
        return view('pages.about');
    }
    public function terms()
    {
        return view('pages.terms');
    }
}
