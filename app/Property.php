<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Property extends Model
{
    use SoftDeletes;
    protected $dates = ['deleted_at'];
    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     * A property belongs to a user
     */
    public function user()
    {
        return $this->belongsTo('App\User');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     * A property can have many Hrooms
     */
    public function rooms()
    {
        return $this->hasMany('App\Hroom');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     * A property can have one amneties row
     */
    public function amenities()
    {
        return $this->hasOne('App\Amenities');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     * A property can have 1 Pg
     */
    public function pg()
    {
        return $this->hasOne('App\Pg');
    }

    public function commercial()
    {
        return $this->hasOne('App\Commercial');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     * A property have a living people row
     */
    public function livingpeople()
    {
        return $this->hasOne('App\Livingpeople');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     * A property have a ideal people row
     */
    public function idealpeople()
    {
        return $this->hasOne('App\Idealpeople');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     * A property can have many photos
     */
    public function photos()
    {
        return $this->hasMany('App\Propertyphotos');
    }
    public function contactmessages()
    {
        return $this->hasMany('App\ContactMessage');
    }
}
