@extends('layouts.app')　　　　　　　　　　　　　　　　　　

@section('content')

<h1>詳細ページ</h1>

  @foreach($posts as $post)
    @if ($post->image_path)
      <!-- 画像を表示 -->
      <a href="/post/{{ $post->id }}"><img src="{{ $post->image_path }}"></a>
      
    @endif
  @endforeach

  <form action="/post/store_comment" method="POST">
      @csrf

      <h2>コメント</h2>
      <textarea name="comments[comment]" placeholder="かわいいですね"></textarea>
 
      <input type="hidden" name="comments[post_id]" value="{{$post->id}}">
      <input type="hidden" name="comments[user_id]" value="{{$user->id}}">
    
 
      <input type="submit" value="保存"/>
  </form>
  
  @foreach($comments as $comment)
   <p> {{ $comment->comment }}　　user_id= {{ $comment->user_id }}</p>

  @endforeach  

@endsection
