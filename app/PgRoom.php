<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PgRoom extends Model
{
    public function pg()
    {
        return $this->belongsTo('App\Pg');
    }
}
