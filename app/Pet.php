<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pet extends Model
{
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
    
    public function foods()   
    {
        return $this->hasMany('App\Food');  
    }

    public function diaries()   
    {
        return $this->hasMany('App\Diary');  
    }
    
    public function weights()   
    {
        return $this->hasMany('App\Weght');  
    }
    
    public function posts()   
    {
        return $this->hasMany('App\Post');  
    }

    // public function pets_data()   
    // {
    //     return $this->hasOne('App\Pets_data');  
    // }
    
    // public function diary()   
    // {
    //     return $this->hasOne('App\Diary');  
    // }
    
    // public function food()   
    // {
    //     return $this->hasOne('App\Food');  
    // }
    
    // public function weight()   
    // {
    //     return $this->hasOne('App\Weight');  
    // }
}


