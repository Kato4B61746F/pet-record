@extends('layouts.app')　　　　　　　　　　　　　　　　　　

@section('content')
  @foreach($posts as $post)
    @if ($post->image_path)
      <!-- 画像を表示 -->
      <img src="{{ $post->image_path }}">
    @endif
  @endforeach
  
  <h1>ペットが登録してある場合はペットの情報を表示</h1>
        
      

          @foreach ($posts as $post)
              <div class='post'>
                  <h2 class='title'>{{ $post->title }}</h2>
                  <p class='body'>{{ $post->body }}</p>
              </div>
          @endforeach
        <h1>登録してない場合はボタンで登録ページへ遷移</h1>
        <button><a href='/post/create'>ペットを登録する</a></button>
@endsection
