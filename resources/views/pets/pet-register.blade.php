@extends('layouts.app')　　　　　　　　　　　　　　　　　　

@section('content')

<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>pet record</title>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    </head>
    <body>
        <h1>ペット登録画面</h1>

        <form action="{{ action('PetsController@create') }}" method="post" enctype="multipart/form-data">
            <!-- アップロードフォームの作成 -->
            <input type="file" name="image">
            {{ csrf_field() }}
            <input type="submit" value="アップロード">
        </form>

        <div>
            ペットの名前を登録する
        </div>
        <div>
            ペットの年齢を登録する
        </div>
        <div>
            ペットのカテゴリーを登録する
        </div>
    </body>
</html>

@endsection