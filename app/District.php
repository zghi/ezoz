<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class District extends Model
{
    //
    public function city()
    {
        return $this->belongsTo('App\City');
    }
    public function neighborhooods()
    {
        return $this->hasMany('App\Neigborhood');
    }
}
