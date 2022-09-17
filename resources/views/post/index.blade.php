@extends('layouts.app')　　　　　　　　　　　　　　　　　　

@section('content')

<h1>タイムライン</h1>
  @foreach($posts as $post)
    @if ($post->image_path)
      <!-- 画像を表示 -->
      <img src="{{ $post->image_path }}">
    @endif
  @endforeach

@endsection
