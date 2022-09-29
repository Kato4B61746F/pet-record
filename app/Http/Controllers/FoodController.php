<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Petsdata;
use App\Food;

class FoodController extends Controller
{
    public function store_food(Request $request, Food $food)
  {
      $input = $request['food'];
      $food->fill($input)->save();
      return redirect('/pets/{{ $pet->id }}');
  }
  
    public function delete(Food $food)
    {
        $food->delete();
        return redirect('/index');
    }
}
