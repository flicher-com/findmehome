<?php

namespace App\Http\Controllers;

use App\Property;
use App\Propertyphotos;
use Illuminate\Http\Request;
use App\Logic\ImageRepo;

use App\Http\Requests;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Validator;

class ImageController extends Controller
{
    protected $image;

    public function __construct(ImageRepo $imageRepository)
    {
        $this->image = $imageRepository;
    }

    public function photos_upload($id)
    {
        $photo = Input::all();

        $property = Property::findorfail($id);

        //return $photo;

        if(count($property->photos) < 6) {
            $response = $this->image->upload($photo, $property);

            $main = $property->photos()->first();
            $property->main_pic = $main['photo_name'];
            $steps = explode(',', $property->step_completed);
            if(!in_array('5', $steps)) {
                $property->step_completed = $property->step_completed.',5';
            }
            $property->save();
            return $response;
        } else {
            return response()->json([
                'success' => false,
                'message' => 'You can Only Upload 6 Images'
            ], 422);
        }
    }

    public function photos_delete()
    {

        $filename = Input::get('id');
        $photo = DB::table('propertyphotos')->where('photo_name', $filename)->first();

        $property = Property::findorfail($photo->property_id);

        if(!$filename)
        {
            return 0;
        }
        $response = $this->image->delete( $filename );

        if(count($property->photos) < 1) {
            $steps = explode(',', $property->step_completed);
            if(in_array('5', $steps)) {
                $property->step_completed = '1,2,3,4';
                $property->published = 0;
                $property->save();
            }
        }
        return $response;
    }

    public function photos_get(Request $request)
    {
        $property_id = $request->input('propertyid');

        $property = Property::findorfail($property_id);

        $images = $property->photos;
        //$images = Propertyphotos::get(['photo_name', 'property_id'])->where('property_id', '=' , $property_id);

        $imageAnswer = [];

        foreach ($images as $image) {
            $imageAnswer[] = [
                'original' => $image->photo_name,
                'server' => $image->photo_name,
                'size' => File::size(public_path('images/full_size/' . $image->filename))
            ];
        }

        return response()->json([
            'images' => $imageAnswer
        ]);
    }

}
