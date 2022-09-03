@extends('layouts.app')　　　　　　　　　　　　　　　　　　

@section('content')

        <form action="{{ action('PostsController@create') }}" method="post" enctype="multipart/form-data">
          <!-- アップロードフォームの作成 -->
          <input type="file" name="image">
          {{ csrf_field() }}
          <input type="submit" value="アップロード">
        </form>
  
        <form action="/posts" method="POST">
            @csrf
            <div class="title">
                <h2>名前</h2>
                <input type="text" name="post[name]" placeholder="Taro"/>
            </div>
            
            <div class="title">
                <h2>年齢</h2>
                <input type="number" name="post[age]" placeholder="1歳"/>
            </div>
            
            <input type="submit" value="保存"/>
        </form>
@endsection

