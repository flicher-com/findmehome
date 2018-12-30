<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pg extends Model
{
    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     * Pg belongs to a property
     */
    public function property()
    {
        return $this->belongsTo('App\Property');
    }

    public function pgrooms()
    {
        return $this->hasMany('App\PgRoom');
    }
}
