<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    //Postに対するリレーション
    
    //「1対多」の関係なので'posts'と複数形に
    public function pets()   
    {
        return $this->hasMany('App\Pet');  
    }
}
