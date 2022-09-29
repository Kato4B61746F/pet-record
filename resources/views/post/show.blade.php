@extends('layouts.app')　　　　　　　　　　　　　　　　　　

@section('content')

<h1>詳細ページ</h1>

    @if ($post->image_path)
      <!-- 画像を表示 -->
      <a href="/post/{{ $post->id }}"><img src="{{ $post->image_path }}"></a>
      
    @endif


  <form action="/post/store_comment" method="POST">
      @csrf
      <div>
          
          
          <h2>コメント</h2>
          <textarea name="comments[comment]" placeholder="かわいい!"></textarea>
          <input type="hidden" name="comments[post_id]" value="{{$post->id}}">
          <input type="hidden" name="comments[user_id]" value="{{$user->id}}">
          <input type="submit" value="保存"/>
      </div>
  </form>
  
  @foreach($comments as $comment)
   <p> {{ $comment->comment }}　　user_id= {{ $comment->user_id }}</p>
  @endforeach  

@endsection
