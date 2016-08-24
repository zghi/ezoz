<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Il extends Model
{
    //
     protected $table = 'iller';
     
       public function ilceler()
    {
        return $this->hasMany('App\Ilce');
    }
}
