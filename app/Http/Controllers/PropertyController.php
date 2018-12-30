<?php

namespace App\Http\Controllers;

use App\Amenities;
use App\Commercial;
use App\Hroom;
use App\Idealpeople;
use App\Livingpeople;
use App\Pg;
use App\PgRoom;
use App\Property;
use DateTime;
use Illuminate\Http\Request;

use App\Http\Requests;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Response;
use Illuminate\Support\Facades\Validator;
/*require 'F:\server\wamp64\www\findmehome\vendor\autoload.php';*/
use sendotp\sendotp;

class PropertyController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function newlisting() {
        return view('property.new');
    }
    public function submitlisting(Request $request)
    {
        $country_session = $request->session()->get('country');

        $rules = array(
            'status' => 'required|not_in:-',
            'kindoflisting' => 'required|not_in:-',
            'address' => 'required',
            'address1.lat' => 'required',
            'address1.long' => 'required',
            'address1.locality' => 'required',
            'address1.state' => 'required',
            'address1.country' => 'required',
        );

        $validator = Validator::make(Input::all(), $rules);

        if ($validator->fails()) {
            $messages = $validator->messages();
            return Redirect::back()->withErrors($validator);
        } else {
            // New Property
            $property = new Property;
            $property->user_id = Auth::user()->id;
            $property->status = $request->input('status');
            $property->type = $request->input('kindoflisting');

            $all = Input::all();
            $address_info = $all['address1'];

            $property->address = $request->input('address');
            if($address_info['country'] == 'Canada') {
                $property->h_no = $address_info['street_number'];
            } else {
                $property->h_no = $request->input('h_no');
                $property->street_no = $request->input('street_no');
            }
            $property->locality = $address_info['route'];
            $property->city = $address_info['locality'];
            $property->state = $address_info['state'];
            $property->zip = $address_info['postal_code'];
            $property->country= $address_info['country'];
            $property->lat= $address_info['lat'];
            $property->long= $address_info['long'];
            $property->step_completed = '1';

            $property->save();

            // New Amenities Table for property
            $amenities = new Amenities;
            $amenities->property_id = $property->id;
            $amenities->save();

            if($property->type != 'commercial-property') {
                // Already Living people
                $living = new Livingpeople;
                $living->property_id = $property->id;
                $living->save();

                // Desired People
                $ideal = new Idealpeople;
                $ideal->property_id = $property->id;
                $ideal->max_age = 120;
                $ideal->save();
            }



            // if Property type is PG
            if($property->type == 'pg') {
                $pg = new PG;
                $pg->property_id = $property->id;
                $pg->save();
            }

            // If Commercial Property
            if($property->type == 'commercial-property') {
                $comm = new Commercial;
                $comm->property_id = $property->id;
                $comm->save();
            }

            return redirect()->route('property.new-listing-room', $property->id);
        }
    }

    public function location($id)
    {
        $property = Property::findorfail($id);
        return view('property.location')
            ->with('property', $property);
    }
    public function location_post($id, Request $request)
    {
        /*$property = Property::findorfail($id);

        $validator = Validator::make($request->all(), [
            'address' => 'required',
        ]);
        $rules = array(
            'address' => 'required',
        );

        $validator = Validator::make(Input::all(), $rules);

        if ($validator->fails()) {
            $messages = $validator->messages();
            return Redirect::back()->withErrors($validator);
        } else {
            $all = Input::all();
            $address_info = $all['address1'];

            $property->address = $request->input('address');

            $property->street_no = $address_info['street_number'];
            $property->locality = $address_info['route'];
            $property->city = $address_info['locality'];
            $property->state = $address_info['state'];
            $property->zip = $address_info['postal_code'];
            $property->country= $address_info['country'];
            $property->lat= $address_info['lat'];
            $property->long= $address_info['long'];

            $steps = explode(',', $property->step_completed);
            if(!in_array('1', $steps)) {
                $property->step_completed = $property->step_completed.'1';
            }

            $property->save();
            return redirect()->route('property.new-listing-room', $property->id);
        }*/
    }

    public function room($id)
    {
        $property = Property::findorfail($id);

        $rooms = $property->rooms;
        $pg = $property->pg;
        $commercial = $property->commercial;

        $pub_rooms = $rooms->where('published', 1);
        $un_pub_rooms = $rooms->where('published', 0);

        $steps = explode(',', $property->step_completed);
        if(!in_array('1', $steps)) {
            return redirect()->route('property.new-listing-location', $property->id)->withErrors("Please Complete this step First");
        } else {
            return view('property.p_rooms')
                ->with('property', $property)
                ->with('rooms', $rooms)
                ->with('pub_rooms', $pub_rooms)
                ->with('un_pub_rooms', $un_pub_rooms)
                ->with('pg', $pg)
                ->with('commercial', $commercial);
        }
    }
    // PG
    public function room_post($id, Request $request)
    {
        $property = Property::findorfail($id);
        $pg = $property->pg;
        $all = Input::all();

        $remove_rooms = explode(',', $request->input('remove_rooms'));

        //return $remove_rooms;

        foreach ($remove_rooms as $room) {
            if($room != 0) {
                $ro = PgRoom::findorfail($room);
                if($ro->pg->property->user_id == Auth::user()->id) {
                    $ro->delete();
                } else {
                    return redirect()->back()->withErrors('Some Thing went wrong! Please try again');
                }
            }
        }

        //return $pg->pgrooms;
        if(count($all) <= 9) {
            $steps = explode(',', $property->step_completed);
            if(in_array('2', $steps)) {
                $property->step_completed = '1';
                $property->published = 0;
                $property->save();
            }
            return Redirect::back()
                ->withErrors('Please Add a PG unit first!');
        } else {

            $rules = array(
                'pg_name' => 'required',

                'no_rooms.*' => 'required|min:1',
                'no_beds.*' => 'required|min:1|max:5',
                'area.*' => 'required|min:1',
                'unit.*' => 'required|in:m,ft',
                'rent.*' => 'required|min:1',

                'available_from' => 'required',
                'min_term' => 'required',
                'deposit' => 'required',
            );


            $validator = Validator::make(Input::all(), $rules);

            if ($validator->fails()) {
                $messages = $validator->messages();
                return Redirect::back()
                    ->withErrors($validator)
                    ->withInput();
            } else {

                $elements[] = array();

                foreach ($all as $a => $val) {
                    $elements[] = $all[$a];
                }
                //return $elements[10];
                //return $all;

                $furnishing =  $all['furnishing'];

                $fur = array();

                foreach ($furnishing as $key => $value) {
                    array_push($fur, $value);
                }

                $count1 = count($elements[9]);

                $cc = count($pg->pgrooms);

                if($cc < 1) {
                    $furcount = 0;
                } else {
                    $furcount = -1;
                }

                for ($i = 0; $i < $count1; $i++) {
                    if ($elements[4][$i] == 0) {
                        $pgroom = new PgRoom();
                    } else {
                        $pgroom = PgRoom::findorfail($elements[4][$i]);
                    }

                    $avail_date = $request->input('available_from');
                    $date = date("Y-m-d", strtotime($avail_date));


                    $pg->property_name = $request->input('pg_name');
                    $pg->available_from = $date;
                    $pg->min_term = $request->input('min_term');
                    $pg->deposit = $request->input('deposit');
                    $pg->food = $request->input('food');
                    $pg->food_price = $request->input('food_price');
                    $pg->laundry = $request->input('laundry');
                    $pg->save();

                    $pgroom->pg_id = $pg->id;
                    $pgroom->no_rooms = $elements[5][$i];
                    $pgroom->no_beds = $elements[6][$i];
                    $pgroom->area = $elements[7][$i];
                    $pgroom->area_unit = $elements[8][$i];
                    $pgroom->rent = $elements[9][$i];

                    $pgroom->ac = $elements[10][$i];
                    $pgroom->cooler = $elements[11][$i];
                    $pgroom->storage = $elements[12][$i];
                    $pgroom->ensuite = $elements[14][$i];

                    if($elements[4][$i] == 0) {
                        $pgroom->furnishing = $fur[$i];
                        $furcount--;
                    } else {
                        $pgroom->furnishing = $elements[13][$elements[4][$i]];
                    }

                    $pgroom->save();


                }
                $steps = explode(',', $property->step_completed);
                if(!in_array('2', $steps)) {
                    $property->step_completed = $property->step_completed.',2';
                    $property->save();
                }
                return redirect()->route('property.new-listing-description', $property->id);
            }

            $steps = explode(',', $property->step_completed);
            if(!in_array('2', $steps)) {
                $property->step_completed = $property->step_completed.',2';
                $property->save();
            }
            return redirect()->route('property.new-listing-description', $property->id);
        }
    }

    // House rooms
    public function rooms_post(Request $request, $id)
    {
        $country_session = $request->session()->get('country');

        $property = Property::findorfail($id);
        $all = Input::all();

        $remove_rooms = explode(',', $request->input('remove_rooms'));
        foreach ($remove_rooms as $room) {
            if($room != 0) {
                $ro = Hroom::findorfail($room);
                if($ro->property->user_id == Auth::user()->id) {
                    $ro->delete();
                } else {
                    return redirect()->back()->withErrors('Some Thing went wrong! Please try again');
                }
            }
        }

        if(count($all) <= 2 && count($property->rooms) == 0) {
            $steps = explode(',', $property->step_completed);
            if(in_array('2', $steps)) {
                $property->step_completed = '1';
                $property->published = 0;
                $property->save();
            }
            return Redirect::back()
                ->withErrors('Please Add a room first!');
        } else {
            $rules = array(
                'type.*' => 'required|not_in:Room Type*',
                'bedroom.*' => 'required|not_in:Bed Rooms*',
                'bathroom.*' => 'required|not_in:Bath Rooms*',
                'area.*' => 'required|min:1',
                'unit.*' => 'required|in:m,ft',
                'rent.*' => 'required|min:1',
                'deposit.*' => 'required|min:1',
                'min_term.*' => 'required|min:1|max:12',
                'available_from.*' => 'required',
            );

            $validator = Validator::make(Input::all(), $rules);

            if ($validator->fails()) {
                $messages = $validator->messages();
                return Redirect::back()
                    ->withErrors($validator)
                    ->withInput();
            } else {

                $elements[] = array();

                foreach ($all as $a=>$val) {
                    $elements[] = $all[$a];
                }
                //return $elements[3];
                //return $all;

                $count = count($elements[3]);

                for($i=0; $i<$count; $i++) {
                    // India
                    if($country_session == 'in') {
                        $avail_date = $elements[12][$i];
                        $date = date("Y-m-d",strtotime($avail_date));

                        if($elements[3][$i] == 0) {
                            $hroom = new Hroom();
                        } else {
                            $hroom = Hroom::findorfail($elements[3][$i]);
                        }
                        $hroom->property_id = $property->id;
                        $hroom->room_type = $elements[4][$i];
                        $hroom->no_bedrooms = $elements[5][$i];
                        $hroom->no_bathrooms = $elements[6][$i];
                        $hroom->area = $elements[7][$i];
                        $hroom->area_unit = $elements[8][$i];
                        $hroom->rent = $elements[9][$i];
                        $hroom->deposit = $elements[10][$i];
                        $hroom->min_term = $elements[11][$i];
                        $hroom->available_from = $date;
                        $hroom->ac = $elements[13][$i];
                        $hroom->cooler = $elements[14][$i];
                        $hroom->storage = $elements[15][$i];
                        $hroom->save();
                    }
                    elseif($country_session == 'ca') {
                        $avail_date = $elements[10][$i];
                        $date = date("Y-m-d",strtotime($avail_date));

                        if($elements[3][$i] == 0) {
                            $hroom = new Hroom();
                        } else {
                            $hroom = Hroom::findorfail($elements[3][$i]);
                        }
                        $hroom->property_id = $property->id;
                        $hroom->no_bedrooms = $elements[4][$i];
                        $hroom->no_bathrooms = $elements[5][$i];
                        $hroom->area = $elements[6][$i];
                        $hroom->area_unit = $elements[7][$i];
                        $hroom->rent = $elements[8][$i];
                        $hroom->deposit = $elements[9][$i];
                        $hroom->available_from = $date;
                        $hroom->min_term = $elements[11][$i];

                        $hroom->save();
                    }
                }
                $steps = explode(',', $property->step_completed);
                if(!in_array('2', $steps)) {
                    $property->step_completed = $property->step_completed.',2';
                    $property->save();
                }
                return redirect()->route('property.new-listing-description', $property->id);
            }
        }
    }

    public function commercial_property(Request $request, $id)
    {
        $property = Property::findorfail($id);
        $commercial = $property->commercial;

        $rules = array(
            'type' => 'required',
            'total_area' => 'required',
            'total_unit' => 'required|in:m,ft',
            'buildup_area' => 'required|min:1',
            'buildup_unit' => 'required|in:m,ft',
            'year_build' => 'required|min:1',
            'year_renovated' => 'required',
            'construction_status' => 'required',
            'min_term' => 'required|min:1|max:12',
            'rent' => 'required|min:1',
            'deposit' => 'required|min:1',
        );

        $validator = Validator::make(Input::all(), $rules);

        if ($validator->fails()) {
            $messages = $validator->messages();
            return Redirect::back()
                ->withErrors($validator)
                ->withInput();
        } else {
            //return Input::all();
            $commercial->type = $request->input('type');
            $commercial->total_area = $request->input('total_area');
            $commercial->total_area_unit = $request->input('total_unit');
            $commercial->build_up_area = $request->input('buildup_area');
            $commercial->build_up_area_unit = $request->input('buildup_unit');
            $commercial->min_term = $request->input('min_term');
            $commercial->year_build = $request->input('year_build');
            $commercial->year_renovated = $request->input('year_renovated');
            $commercial->construction_status = $request->input('construction_status');
            $commercial->rent = $request->input('rent');
            $commercial->deposit = $request->input('deposit');
            $commercial->multi_properties = $request->input('multi_units');

            $commercial->save();

            $steps = explode(',', $property->step_completed);
            if(!in_array('2', $steps)) {
                $property->step_completed = $property->step_completed.',2';
                $property->save();
            }
            return redirect()->route('property.new-listing-description', $property->id);
        }
    }

    public function newroom($id) {
        $property = Property::findorfail($id);

        return view('property.addroom')
            ->with('property', $property);
    }
    public function newroom_post($id, Request $request)
    {
        $property = Property::findorfail($id);

        $validator = Validator::make($request->all(), [
            'room_name' => 'required',
            'available_from' => 'required',
            'min_term' => 'required',
            'rent' => 'required',
            'deposit' => 'required',
            'cancel_policy' => 'required',
        ]);
        $rules = array(
            'room_name' => 'required',
            'available_from' => 'required',
            'min_term' => 'required',
            'rent' => 'required',
            'deposit' => 'required',
            'cancel_policy' => 'required',
        );

        $validator = Validator::make(Input::all(), $rules);

        if ($validator->fails()) {
            $messages = $validator->messages();
            return Redirect::back()
                ->withErrors($validator)
                ->withInput();
        } else {
            $avail_date = $request->input('available_from');
            $date = date("Y-m-d",strtotime($avail_date));

            $hroom = new Hroom;

            $hroom->room_name = $request->input('room_name');
            $hroom->available_from = $date;
            $hroom->min_term = $request->input('min_term');
            $hroom->rent = $request->input('rent');
            $hroom->deposit = $request->input('deposit');
            $hroom->cancel_policy = $request->input('cancel_policy');
            $hroom->area = $request->input('area');
            $hroom->ensuite = $request->input('ensuite');
            $hroom->published = 1;
            $hroom->save();

            $steps = explode(',', $property->step_completed);
            if(!in_array('2', $steps)) {
                $property->step_completed = $property->step_completed.',2';
                $property->save();
            }

            return redirect()->route('property.new-listing-room', $property->id);
        }

    }

    public function newroom_edit($id)
    {
        $room = Hroom::findorfail($id);
        $property = $room->property;
        return view('property.p_room_edit')
            ->with('room', $room)
            ->with('property', $property);
    }
    public function newroom_edit_post($id, Request $request)
    {
        $hroom = Hroom::findorfail($id);
        $property = $hroom->property;
        $valdator = Validator::make($request->all(), [
            'room_name' => 'required',
            'available_from' => 'required',
            'min_term' => 'required',
            'rent' => 'required',
            'deposit' => 'required',
            'cancel_policy' => 'required',
        ]);
        $rules = array(
            'room_name' => 'required',
            'available_from' => 'required',
            'min_term' => 'required',
            'rent' => 'required',
            'deposit' => 'required',
            'cancel_policy' => 'required',
        );

        $validator = Validator::make(Input::all(), $rules);

        if ($validator->fails()) {
            $messages = $validator->messages();
            return Redirect::back()->withErrors($validator);
        } else {
            $avail_date = $request->input('available_from');
            $date = date("Y-m-d",strtotime($avail_date));

            $hroom->room_name = $request->input('room_name');
            $hroom->available_from = $date;
            $hroom->min_term = $request->input('min_term');
            $hroom->rent = $request->input('rent');
            $hroom->deposit = $request->input('deposit');
            $hroom->cancel_policy = $request->input('cancel_policy');
            $hroom->area = $request->input('area');
            $hroom->share_room = $request->input('shared');
            $hroom->ensuite = $request->input('ensuite');
            $hroom->save();

            return redirect()->route('property.new-listing-room', $property->id);
        }
    }

    public function multiple_room($id)
    {
        $property = Property::findorfail($id);
        return view('property.multiple')
            ->with('property', $property);
    }

    public function multiple_room_post(Request $request, $id)
    {
        $property = Property::findorfail($id);
        $validator = Validator::make($request->all(), [
            'available_from' => 'required',
            'min_term' => 'required',
            'rent' => 'required',
            'deposit' => 'required',
            'cancel_policy' => 'required',
        ]);
        $rules = array(
            'available_from' => 'required',
            'min_term' => 'required',
            'rent' => 'required',
            'deposit' => 'required',
            'cancel_policy' => 'required',
        );

        $validator = Validator::make(Input::all(), $rules);

        if ($validator->fails()) {
            $messages = $validator->messages();
            return Redirect::back()->withErrors($validator);
        } else {
            $am = Input::all();
            $name = $am['name'];
            $area = $am['area'];
            $namestr = '';
            $areastr = '';

            for($i=0; $i < count($name); $i++) {
                $namestr = implode(';', $name);
            }

            for($i=0; $i < count($area); $i++) {
                $areastr = implode(';', $area);
            }

            $avail_date = $request->input('available_from');
            $date = date("Y-m-d",strtotime($avail_date));

            $hroom = new Hroom;
            $hroom->property_id = $property->id;

            $hroom->room_name = $namestr;
            $hroom->area = $areastr;
            $hroom->available_from = $date;
            $hroom->min_term = $request->input('min_term');
            $hroom->rent = $request->input('rent');
            $hroom->deposit = $request->input('deposit');
            $hroom->cancel_policy = $request->input('cancel_policy');
            $hroom->ensuite = $request->input('ensuite');
            $hroom->multi_room = 1;
            $hroom->published = 1;
            $hroom->save();

            $steps = explode(',', $property->step_completed);
            if(!in_array('2', $steps)) {
                $property->step_completed = $property->step_completed.',2';
                $property->save();
            }

            return redirect()->route('property.new-listing-room', $property->id);

        }
    }

    public function multiple_room_edit($id)
    {
        $room = Hroom::findorfail($id);
        $property = $room->property;
        return view('property.multiple-room-edit')
            ->with('room', $room)
            ->with('property', $property);
    }

    public function multiple_room_edit_post(Request $request, $id)
    {
        $hroom = Hroom::findorfail($id);
        $property = $hroom->property;
        $valdator = Validator::make($request->all(), [
            'available_from' => 'required',
            'min_term' => 'required',
            'rent' => 'required',
            'deposit' => 'required',
            'cancel_policy' => 'required',
        ]);
        $rules = array(
            'available_from' => 'required',
            'min_term' => 'required',
            'rent' => 'required',
            'deposit' => 'required',
            'cancel_policy' => 'required',
        );

        $validator = Validator::make(Input::all(), $rules);

        if ($validator->fails()) {
            $messages = $validator->messages();
            return Redirect::back()->withErrors($validator);
        } else {
            $am = Input::all();
            $name = $am['name'];
            $area = $am['area'];
            $namestr = '';
            $areastr = '';

            for($i=0; $i < count($name); $i++) {
                $namestr = implode(';', $name);
            }

            for($i=0; $i < count($area); $i++) {
                $areastr = implode(';', $area);
            }


            $avail_date = $request->input('available_from');
            $date = date("Y-m-d", strtotime($avail_date));

            $hroom->room_name = $namestr;
            $hroom->available_from = $date;
            $hroom->min_term = $request->input('min_term');
            $hroom->rent = $request->input('rent');
            $hroom->deposit = $request->input('deposit');
            $hroom->cancel_policy = $request->input('cancel_policy');
            $hroom->area = $areastr;
            $hroom->ensuite = $request->input('ensuite');
            $hroom->save();

            return redirect()->route('property.new-listing-room', $property->id);
        }
    }

    public function room_publish($id)
    {
        $room = Hroom::findorfail($id);
        $room->published = 1;
        $room->save();
        return redirect()->back();
    }
    public function room_unpublish($id)
    {
        $room = Hroom::findorfail($id);
        $room->published = 0;
        $room->save();
        return redirect()->back();
    }

    public function description($id)
    {
        $property = Property::findorfail($id);
        $amenities = $property->amenities;

        $steps = explode(',', $property->step_completed);
        if(!in_array('2', $steps)) {
            return redirect()->route('property.new-listing-room', $property->id)->withErrors("Please Complete this step First");
        } else {
            return view('property.description')
                ->with('property', $property)
                ->with('amenities', $amenities);
        }
    }
    public function description_post($id, Request $request)
    {
        $property = Property::findorfail($id);
        $amenities = $property->amenities;

        $am = Input::all();
        $amen = $am['amenities'];
        foreach($amen as $key => $value) {
            $amenities->$key = $amen[$key];
        }
        $amenities->save();

        $rules = array(
            'description' => 'required|min:50|max:500',
        );

        $validator = Validator::make(Input::all(), $rules);

        if ($validator->fails()) {
            $messages = $validator->messages();
            return Redirect::back()->withErrors($validator);
        } else {
            $property->description = $request->input('description');

            $steps = explode(',', $property->step_completed);
            if(!in_array('3', $steps)) {
                if($property->type == 'commercial-property') {
                    $property->step_completed = $property->step_completed.',3,4';
                } else {
                    $property->step_completed = $property->step_completed.',3';
                }
            }
            $property->save();

            if($property->type == 'commercial-property') {
                return redirect()->route('property.new-listing-photos', $property->id);
            } else {
                return redirect()->route('property.new-listing-flatshare', $property->id);
            }
        }
    }

    public function flatshare($id) {
        $property = Property::findorfail($id);
        $flatshare = $property->livingpeople;
        $ideal = $property->idealpeople;

        $steps = explode(',', $property->step_completed);
        if(!in_array('3', $steps)) {
            return redirect()->route('property.new-listing-description', $property->id)->withErrors("Please Complete this step First");
        } else {
            return view('property.flatshare')
                ->with('property', $property)
                ->with('flatshare', $flatshare)
                ->with('ideal', $ideal);
        }
    }
    public function flatshare_post($id, Request $request)
    {
        $property = Property::findorfail($id);
        $livingpeople = $property->livingpeople;
        $idealpeople = $property->idealpeople;

        $all = Input::all();
        $flatshare = $all['flatshare'];
        $ideal = $all['ideal'];

        foreach($flatshare as $key => $value) {
            $livingpeople->$key = $flatshare[$key];
        }
        $livingpeople->save();

        foreach($ideal as $key => $value) {
            $idealpeople->$key = $ideal[$key];
        }
        $idealpeople->save();

        $valdator = Validator::make($request->all(), [
            'age' => 'required',
        ]);
        $rules = array(
            'age' => 'required',
        );

        $validator = Validator::make(Input::all(), $rules);

        if ($validator->fails()) {
            $messages = $validator->messages();
            return Redirect::back()->withErrors($validator);
        } else {
            $age = $request->input('age');
            $idealage = explode(';', $age);

            $idealpeople->min_age= $idealage[0];
            $idealpeople->max_age= $idealage[1];
            $idealpeople->first_time = 0;
            $idealpeople->save();

            $steps = explode(',', $property->step_completed);
            if(!in_array('4', $steps)) {
                $property->step_completed = $property->step_completed.',4';
                $property->save();
            }
            return redirect()->route('property.new-listing-photos', $property->id);
        }

    }

    public function photos($id)
    {
        $property = Property::findorfail($id);

        $steps = explode(',', $property->step_completed);
        if(!in_array('4', $steps)) {
            return redirect()->route('property.new-listing-flatshare', $property->id)->withErrors("Please Complete this step First");
        } else {
            return view('property.photos')
                ->with('property', $property);
        }

    }

    public function phone($id)
    {
        $property = Property::findorfail($id);

        $steps = explode(',', $property->step_completed);
        if(!in_array('5', $steps)) {
            return redirect()->route('property.new-listing-photos', $property->id)->withErrors("Please Complete this step First! You need to have atleast 1 image");
        } else {
            return view('property.phone')
                ->with('property', $property);
        }
    }

    public function phone_post($id)
    {
        $property = Property::findorfail($id);
        $user = Auth::user();

        if($user->phone_verified == 1) {
            $steps = explode(',', $property->step_completed);
            if(!in_array('6', $steps)) {
                $property->step_completed = $property->step_completed.',6';
            }
            $property->published = 1;
            $property->save();

            Mail::send('mail.listingadded', ['property' =>$property, 'user' => $user], function($message) use($user){
                $message->from('no_reply@email.findmehome.xyz', 'Findmehome');
                $message->to($user->email, $user->first_name)
                    ->subject('Your Listing is now published');
            });

            return redirect()->route('property.dashboard', $property->id);
        } else {
            return redirect()->back()->withErrors('Please Verify Your Phone Number!');
        }
    }

    public function send_otp(Request $request)
    {

        if($request->ajax()) {

            $country_session = $request->session()->get('country');

            $user = Auth::user();

            $messsages = array(
                'phoneno.required'=>'Please enter your Phone Number',
                'phoneno.min' => 'The phone number must be 10 characters.',
                'phoneno.max' => 'The phone number must be 10 characters.',
                'phoneno.unique' => 'The Phone number has already been taken, Please try different number.'
            );
            if($request->input('phoneno') == $user->phone_no) {
                $rules = array(
                    'phoneno' => 'required|min:10|max:10',
                );
            } else {
                $rules = array(
                    'phoneno' => 'required|min:10|max:10|unique:users,phone_no',
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

            if($country_session == 'in') {
                $country_code = '91';
            } elseif($country_session == 'ca') {
                $country_code = '1';
            }

            $phoneno = $request->input('phoneno');
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


            $user->private_no = $request->input('private');

            //$user->phone_no = $phoneno;
            $user->phone_token = $token;
            $user->save();

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
            $phoneno = $request->input('phoneno');

            $user = Auth::user();
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

            $user->phone_verified = 1;
            $user->phone_no = $phoneno;
            $user->save();

            return response()->json(200);

        }
    }

    public function dashboard($id)
    {
        $property = Property::findorfail($id);
        $messages = $property->contactmessages;

        return view('property.dashboard')
            ->with('property', $property)
            ->with('messages', $messages);
    }

    public function publish_property($id, Request $request)
    {
        $property = Property::findorfail($id);
        $country_session = $request->session()->get('country');
        if($country_session == 'ca') {
            $property->published = 1;
            $property->save();
        } elseif ($country_session == 'in') {
            if($property->type == 'pg') {
                $property->published = 1;
                $property->save();
            }

            if($property->type == 'house') {
                $rooms = $property->rooms;

                foreach($rooms as $room) {
                    $room->published = 1;
                    $room->save();
                }
                $property->published = 1;
                $property->save();
            }
        }
        return redirect()->back();

    }
    public function unpublish_property($id, Request $request)
    {
        $property = Property::findorfail($id);
        $country_session = $request->session()->get('country');
        if($country_session == 'ca') {
            $property->published = 0;
            $property->save();
        } elseif ($country_session == 'in') {

            if($property->type == 'pg') {
                $property->published = 0;
                $property->save();
            }

            if($property->type == 'house') {
                $rooms = $property->rooms;

                foreach($rooms as $room) {
                    $room->published = 0;
                    $room->save();
                }
                $property->published = 0;
                $property->save();
            }
        }
        return redirect()->back();

    }
}
