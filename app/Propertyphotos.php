<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Propertyphotos extends Model
{
    public static $rules = [
        'file' => 'required|mimes:png,gif,jpeg,jpg,bmp|max:5000'
    ];

    public static $messages = [
        'file.mimes' => 'Uploaded file is not in image format',
        'file.required' => 'Image is required'
    ];

    public function property()
    {
        return $this->belongsTo('App\Property');
    }
}
