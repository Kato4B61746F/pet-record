<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Post;
use Storage;
use App\Category;

class PostsController extends Controller
{
  public function add()
  {
      return view('post.create');
  }

  public function index(Request $request)
  {
    $posts = Post::all();
    
    return view('post.index', ['posts' => $posts]);
  }
  
  public function store(Request $request, Post $post, Category $category)
  {
  
      //s3アップロード開始
      $image = $request->file('image');
      // バケットの`myprefix`フォルダへアップロード
      $path = Storage::disk('s3')->putFile('pet', $image, 'public');
      // アップロードした画像のフルパスを取得
 

      $input = $request['post'];
      $post->fill($input);
      $post->image_path = Storage::disk('s3')->url($path);
      $post->save();
      return redirect('/');
  }
  
  public function create(Category $category)
  {
      return view('post/create')->with(['categories' => $category->get()]);;
  }
}


