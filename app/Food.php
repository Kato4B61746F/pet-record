<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Food extends Model
{
    protected $fillable = [
        'food',
        'pet_id'
    ];
    
    public function pet()
    {
        return $this->belongsTo('App\Pet');
    }
}
