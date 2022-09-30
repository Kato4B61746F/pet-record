<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Pets;
use App\Weight;

class WeightController extends Controller
{
    public function store_weight(Request $request, Weight $weight)
  {
      $input = $request['weights'];
      $weight->fill($input)->save();
      return redirect('/pets/{{ $pet->id }}');
  }
  
    public function delete(Weight $weight)
  {
      $weight->delete();
      return redirect('/index');
  }
}
