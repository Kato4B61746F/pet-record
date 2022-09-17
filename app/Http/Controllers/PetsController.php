<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Pet;
use Storage;
use App\Category;
use App\Food;
use App\Weight;
use App\Diary;

class PetsController extends Controller
{
  public function index(Request $request)
  {
    $pets = Pet::all();
    $foods = Food::all();
    $weights = Weight::all();
    $diaries = Diary::all();
    
    return view('pets.index', ['pets' => $pets, 'foods' => $foods, 'weights' => $weights, 'diaries' => $diaries]);
  }
  
  public function store(Request $request, Pet $pet, Category $category)
  {
  
      //s3アップロード開始
      $image = $request->file('image');
      // バケットの`myprefix`フォルダへアップロード
      $path = Storage::disk('s3')->putFile('pet', $image, 'public');
      // アップロードした画像のフルパスを取得
 
      $input = $request['pet'];
      $pet->fill($input);
      $pet->image_path = Storage::disk('s3')->url($path);
      $pet->save();
      return redirect('/pets/index/{{ $pet->id }}');
  }
  
  
  
  public function create(Category $category)
  {
      return view('pets/pet-register')->with(['categories' => $category->get()]);;
  }
  

}
