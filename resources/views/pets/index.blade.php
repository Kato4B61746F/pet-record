@extends('layouts.app')　　　　　　　　　　　　　　　　　　

@section('content')
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

      <h2>ご飯</h2>
      <textarea name="food[food]" placeholder="キャットフード150g"></textarea>
      <select name="food[pet_id]">
      @foreach($pets as $pet)
        <option value="{{ $pet->id }}">{{ $pet->name }}</option>
      @endforeach
      </select>
      <input type="submit" value="保存"/>
  </form>
  
  @foreach($foods as $food)
   <p> {{ $food->food }}</p>
  @endforeach
  
  <form action="/pets_weight" method="POST">
      @csrf

      <h2>体重</h2>
      <input type="number" name="weights[weight]" placeholder="3kg"/>
      <select name="weights[pet_id]">
      @foreach($pets as $pet)
        <option value="{{ $pet->id }}">{{ $pet->name }}</option>
      @endforeach
      </select>
      <input type="submit" value="保存"/>
  </form>
  
  @foreach($weights as $weight)
   <p> {{ $weight->weight }}kg</p>
  @endforeach

  <form action="/pets_diary" method="POST">
      @csrf

      <h2>日記</h2>
      <textarea name="diaries[diary]" placeholder="今日の出来事"></textarea>
      <select name="diaries[pet_id]">
      @foreach($pets as $pet)
        <option value="{{ $pet->id }}">{{ $pet->name }}</option>
      @endforeach
      </select>
      <input type="submit" value="保存"/>
  </form>
  
  @foreach($diaries as $diary)
   <p> {{ $diary->diary }}</p>
  @endforeach  
  
@endsection
