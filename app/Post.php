<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    
    protected $fillable = [
        'pet_id'
    ];
    
    
    
    //「1対多」の関係なので単数系に
    public function pet()
    {
        return $this->belongsTo('App\Pet');
    }
    
    public function comments()
    {
        return $this->hasMany('App\Comment');
    }
    
    
}
