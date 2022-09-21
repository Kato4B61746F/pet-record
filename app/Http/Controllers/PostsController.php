<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Post;
use Storage;
use App\Pet;

class PostsController extends Controller
{

  public function index(Request $request)
  {
    $posts = Post::all();
    return view('post.index', ['posts' => $posts]);
  }
  
  public function store(Request $request, Post $post, Pet $pet)
  {
  
      //s3アップロード開始
      $image = $request->file('image');
      // バケットの`myprefix`フォルダへアップロード
      $path = Storage::disk('s3')->putFile('post', $image, 'public');
      // アップロードした画像のフルパスを取得
 
      $input = $request['posts'];
      $post->fill($input);
      $post->image_path = Storage::disk('s3')->url($path);
      $post->save();
      return redirect('/');
  }
  
  public function create(Request $request)
  {
    $pets = Pet::all();
    
    return view('post.create', ['pets' => $pets]);
    // return view('post.create');
  }

  public function show(Request $request, Post $post)
  {
      // $posts = Post::all();
      // return view('post.show', ['posts' => $posts]);
      $id = $post;
      $posts = Post::find($id);
      return view('post/show')->with(['posts' => $posts]);

   //'post'はbladeファイルで使う変数。中身は$postはid=1のPostインスタンス。
  }
}


