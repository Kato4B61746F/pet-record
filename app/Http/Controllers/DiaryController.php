<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Pets;
use App\Diary;

class DiaryController extends Controller
{
    public function store_diary(Request $request, Diary $diary)
  {
      $input = $request['diaries'];
      $diary->fill($input)->save();
      return redirect('/pets/{{ $pet->id }}');
  }
}
