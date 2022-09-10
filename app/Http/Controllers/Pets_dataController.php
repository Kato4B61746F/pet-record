<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Pets_data;

class Pets_dataController extends Controller
{
    public function store_food(Request $request, Pets_data $pets_data)
  {
      $input = $request['pets_data'];
      $pets_data->fill($input)->save();
      return redirect('/pets/{{ $pet->id }}');
  }
}
