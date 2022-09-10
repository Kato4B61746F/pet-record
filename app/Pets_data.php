<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pets_data extends Model
{
    protected $fillable = [
        'diary',
        'weight',
        'food',
        'pet_id'
    ];
    
    public function pet()   
    {
        return $this->belongsTo('App\Pet');
    }
}


