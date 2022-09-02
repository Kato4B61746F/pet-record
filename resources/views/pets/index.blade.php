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
        <h1>ペットが登録してある場合はペットの情報を表示</h1>
        
      


        <h1>登録してない場合はボタンで登録ページへ遷移</h1>
        <button><a href='/post/create'>ペットを登録する</a></button>
    </body>
</html>

@endsection