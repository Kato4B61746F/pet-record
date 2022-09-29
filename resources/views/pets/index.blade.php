@extends('layouts.app')　　　　　　　　　　　　　　　　　　

@section('content')
<div style="display: flex;">
  

  <div class="card" style="width: 18rem; margin-left:1rem;">
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
  <!--<div style="flex-flow: column; mb-3;">-->
    

 <!--ご飯 -->
    <div  class="card" style="width: 18rem; height: 30rem;  margin-left: 1rem; ">
      <div class="card-header"> 
        ご飯
      </div>
      <div class="card" style=" overflow: scroll;">
        @foreach($foods as $food)
          <ul class="list-group list-group-flush ">
            <li class="list-group-item">{{ $food->food }}</li>
          </ul>
        @endforeach
      </div>
      
      <form action="/pets_food" method="POST" >
      @csrf
      <div class="form-floating">
        <textarea class="form-control" name="food[food]" placeholder="キャットフード150g"></textarea>  
        <button type="submit" class="btn btn-primary　m-1">追加</button>
      </div>
      <input type="hidden" name="food[pet_id]" value="{{ $pet->id }}">
      </form>

    </div>
  <!--ご飯-->
  <!--日記-->
  
    <div class="card" style="width: 18rem; height: 30rem; margin-left: 1rem;">
      <div class="card-header">
        日記
      </div>
      <div class="card"  style="overflow: scroll;">
      @foreach($diaries as $diary)
        <ul class="list-group list-group-flush">
          <li class="list-group-item">{{ $diary->diary }}</li>
        </ul>
      @endforeach
      </div>
      <form action="/pets_diary" method="POST">
      @csrf
      <div class="form-floating">
        <textarea class="form-control" name="diaries[diary]" placeholder="今日の出来事"></textarea>  
        <button type="submit" class="btn btn-primary　m-1">追加</button>
      </div>
      <input type="hidden" name="diaries[pet_id]" value="{{ $pet->id }}">  
      </form>
    </div>

  <!--日記//-->
  
  <!--体重-->
  <div class="card" style="width: 18rem; height:30rem; margin-left:1rem;">
      <div class="card-header">
        体重
      </div>
      <div class="card" style=" overflow: scroll;">
      @foreach($weights as $weight)
        <ul class="list-group list-group-flush">
          <li class="list-group-item"> {{ $weight->weight }}kg</li>
        </ul>
      @endforeach
      </div>
      <form action="/pets_weight" method="POST">
        @csrf
        <div class="form-floating">
          <!--<textarea class="form-control" name="diaries[diary]" placeholder="今日の出来事"></textarea> -->
          <input type="number" name="weights[weight]" placeholder="3kg"/>
          <button type="submit" class="btn btn-primary　m-1">追加</button>
        </div>
        <input type="hidden" name="weights[pet_id]" value="{{ $pet->id }}">
      </form>
  </div>
  <!--体重//-->
</div>
@endsection
