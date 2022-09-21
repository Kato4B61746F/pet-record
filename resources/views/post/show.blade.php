@extends('layouts.app')　　　　　　　　　　　　　　　　　　

@section('content')

<h1>詳細ページ</h1>




    
  @foreach($posts as $post)
    @if ($post->image_path)
      <!-- 画像を表示 -->
      <a href="/post/{{ $post->id }}"><img src="{{ $post->image_path }}"></a>
      
    @endif
  @endforeach



        


@endsection
