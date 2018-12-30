<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Hroom extends Model
{
    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     * Rooms belongs to a Property
     */
    public function property()
    {
        return $this->belongsTo('App\Property');
    }
}
