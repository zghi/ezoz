<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Commucation extends Model
{
    //
    protected $fillable = ['city_id', 'district_id','neighborhood_id','adres', 'telefon','fax','web_sayfası'];
}
