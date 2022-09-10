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
  
  <h1>詳細投稿</h1>
  <form action="/pets_food" method="POST">
      @csrf
      <h2>日記</h2>
      <textarea name="pets_data[diary]" placeholder="今日の出来事"></textarea>
      
      <h2>体重</h2>
      <input type="number" name="pets_data[weight]" placeholder="3kg"/>

      <h2>ご飯</h2>
      <textarea name="pets_data[food]" placeholder="キャットフード150g"></textarea>
      <select name="pets_data[pet_id]">
      @foreach($pets as $pet)
        <option value="{{ $pet->id }}">{{ $pet->name }}</option>
      @endforeach
      </select>
      <input type="submit" value="保存"/>
  </form>
@endsection
