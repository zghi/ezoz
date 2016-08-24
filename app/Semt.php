<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Semt extends Model
{
    //
     protected $table = 'semtler';
      public function ilce()
    {
        return $this->belongsTo('App\ilce');
    }
}
