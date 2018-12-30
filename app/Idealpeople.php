<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Idealpeople extends Model
{
    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     * Ideal people one row belongs to a property
     */
    public function property()
    {
        return $this->belongsTo('App\Property');
    }
}
