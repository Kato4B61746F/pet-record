@extends('layouts.app')　　　　　　　　　　　　　　　　　　

@section('content')
<div style="display: flex;">
  

<div class="card" style="width: 18rem; margin-left:1rem; margin-bottom: 1rem;">
  @foreach($pets as $pet)
    @if ($pet->image_path)
      <img src="{{ $pet->image_path }}" class="card-img-top" alt="pet_picture">
    @endif
  @endforeach
  <div class="card-body">
    <h5 class="card-title">Name  {{$pet->name}}</h5>
    <p class="card-text">Age  {{$pet->age}}</p>
    <p class="card-text">Type　{{$pet->category->name}}</p>
  </div>
</div>
<div style="flex-flow: column;">
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
  </div>
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
</div>
@endsection
