<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Diary extends Model
{
    public function pet()   
    {
        return $this->belongsTo('App\Pet');
    }
}
