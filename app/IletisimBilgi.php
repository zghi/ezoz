<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class IletisimBilgi extends Model
{
    //
    protected $table = 'iletisim_bilgileri'; 
    protected $fillable = ['il_id', 'ilce_id','semt_id','adres', 'telefon','fax','web_sayfası'];
}
