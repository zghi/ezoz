<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ilce extends Model
{
    //
     protected $table = 'ilceler';
     
      public function il()
    {
        return $this->belongsTo('App\Il');
    }
    public function semtler()
    {
        return $this->hasMany('App\Semt');
    }
}
