<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Pets_data;
use App\Food;

class Pets_dataController extends Controller
{
    public function store_food(Request $request, Food $food)
  {
      $input = $request['food'];
      $food->fill($input)->save();
      return redirect('/pets/{{ $pet->id }}');
  }
}
