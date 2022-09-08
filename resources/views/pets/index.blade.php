@extends('layouts.app')　　　　　　　　　　　　　　　　　　

@section('content')
  @foreach($pets as $pet)
    @if ($pet->image_path)
      <!-- 画像を表示 -->
      <img src="{{ $pet->image_path }}">
    @endif
  @endforeach
  
  <h1>ペットが登録してある場合はペットの情報を表示</h1>
        
      


        <h1>登録してない場合はボタンで登録ページへ遷移</h1>
        <button><a href='/pets/pet-register'>ペットを登録する</a></button>
@endsection
