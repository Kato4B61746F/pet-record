<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Pets;
use App\Food;

class FoodController extends Controller
{
    public function store_food(Request $request, Food $food)
  {
      $input = $request['food'];
      $food->fill($input)->save();
      return redirect('/pets/{{ $pet->id }}');
  }
}
