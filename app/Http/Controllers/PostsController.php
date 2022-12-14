<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use App\Post;
use Storage;
use App\Pet;
use App\Comment;
use App\User;

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
      // バケットの`post`フォルダへアップロード
      $path = Storage::disk('s3')->putFile('post', $image, 'public');
      // アップロードした画像のフルパスを取得
 
      $input = $request['posts'];
      $post->fill($input);
      $post->image_path = Storage::disk('s3')->url($path);
      $post->save();
      return redirect('/post/index');
  }
  
  public function create(Request $request)
  {
    $id = Auth::id();
    $pet = Pet::whereUser_id($id)->first();
    return view('post.create', ['pet' => $pet]);
  }

  public function show(Request $request, Post $post)
  {
      $user = Auth::user();
      $comments = Comment::wherePost_id($post->id)->get();
      $post = Post::find($post->id);
      return view('post/show')->with(['post' => $post, 'user' => $user, 'comments' => $comments]);
  }
  
    public function store_comment(Request $request, Comment $comment, Post $post, User $user)
  {
      $input = $request['comments'];
      $comment->fill($input)->save();
      return back();
  }

}


