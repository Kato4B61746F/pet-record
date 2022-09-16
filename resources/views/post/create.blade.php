@extends('layouts.app')　　　　　　　　　　　　　　　　　　

@section('content')


  
        <form action="post/store" method="POST"  enctype="multipart/form-data">
            @csrf
            <div class="title">
                <h2>新規投稿</h2>
            </div>
           
            <input type="file" name="image">
            
            <select name="posts[pet_id]">  
                  @foreach($pets as $pet)
                    <option value="{{ $pet->id }}">{{ $pet->name }}</option>
                  @endforeach
            </select>
            <input type="submit" value="保存"/>
        </form>
@endsection
