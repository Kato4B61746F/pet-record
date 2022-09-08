<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pet extends Model
{
    //Categoryに対するリレーション
    
    //「1対多」の関係なので単数系に
    public function category()
    {
        return $this->belongsTo('App\Category');
    }
}
