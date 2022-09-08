<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    //Categoryに対するリレーション
    protected $fillable = [
        'name',
        'age',
        'category_id'
        
    ];
    //「1対多」の関係なので単数系に
    public function category()
    {
        return $this->belongsTo('App\Category');
    }
}
