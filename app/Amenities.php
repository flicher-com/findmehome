<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Amenities extends Model
{
    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     * A Amenities row belongs to a property
     */
    public function Property()
    {
        return $this->belongsTo('App\Property');
    }
}
