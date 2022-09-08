@extends('layouts.app')　　　　　　　　　　　　　　　　　　

@section('content')
  <button><a href='/pets/pet-register'>ペットを登録する</a></button><br>
  @foreach($pets as $pet)
    @if ($pet->image_path)
      <!-- 画像を表示 -->
      <img src="{{ $pet->image_path }}">
    @endif
  @endforeach
  
  <h1>名前　{{$pet->name}}</h1>
  <h1>年齢　{{$pet->age}}</h1>
  <h1>種類　{{$pet->category->name}}</h1>
@endsection
