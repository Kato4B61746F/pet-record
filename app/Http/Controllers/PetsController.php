<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use App\Pet;
use Storage;
use App\Category;
use App\Food;
use App\Weight;
use App\Diary;

class PetsController extends Controller
{
  public function index(Request $request, Pet $pet)
  {
    // dd($pet);
    $id = Auth::id();
    if(Pet::whereUser_id($id)->first() == null){
      return view('pets/pet-register', ['id' => $id]);
    }
    $pet = Pet::whereUser_id($id)->first();
    
    $foods = Food::wherePet_id($pet->id)->get();
    $weights = Weight::wherePet_id($pet->id)->get();
    $diaries = Diary::wherePet_id($pet->id)->get();
    
    return view('pets/index', ['pet' => $pet, 'foods' => $foods, 'weights' => $weights, 'diaries' => $diaries]);
  }
  
  public function store(Request $request, Pet $pet)
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
      return redirect('/pets/index/');
  }
  
  
  
  // public function create(Request $request, Category $category)
  // // {
  // //     $id = Auth::id();
  // //     if (Pet::whereId($id)->first() != null){
  // //       $pet = Pet::whereId($id)->first();
  // //       $foods = Food::wherePet_id($id)->get();
  // //       $weights = Weight::wherePet_id($id)->get();
  // //       $diaries = Diary::wherePet_id($id)->get();
  // //       return view('pets/index', ['pet' => $pet, 'foods' => $foods, 'weights' => $weights, 'diaries' => $diaries]);;
  // //     }
  // //     return view('pets/pet-register', ['id' => $id]);
  // }
  

}
