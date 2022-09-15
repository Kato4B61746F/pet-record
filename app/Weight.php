<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Weight extends Model
{
    public function pet()   
    {
        return $this->belongsTo('App\Pet');
    }
}
