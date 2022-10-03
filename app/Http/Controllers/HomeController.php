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


class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
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
}
