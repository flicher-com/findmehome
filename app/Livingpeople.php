<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Livingpeople extends Model
{
    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     * Living people one row belongs to a property
     */
    public function property()
    {
        return $this->belongsTo('App\Property');
    }
}
