<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Weight extends Model
{
    protected $fillable = [
        'weight',
        'pet_id'
    ];
    
    public function pet()   
    {
        return $this->belongsTo('App\Pet');
    }
}
