<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Diary extends Model
{
    protected $fillable = [
        'diary',
        'pet_id'
    ];
    
    public function pet()   
    {
        return $this->belongsTo('App\Pet');
    }
}
