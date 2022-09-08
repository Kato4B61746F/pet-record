@extends('layouts.app')　　　　　　　　　　　　　　　　　　

@section('content')

        <form action="/pets" method="POST"  enctype="multipart/form-data">
            @csrf
            <div class="title">
                <h2>名前</h2>
                <input type="text" name="pet[name]" placeholder="Taro"/>
            </div>
            
            <div class="title">
                <h2>年齢</h2>
                <input type="number" name="pet[age]" placeholder="1歳"/>
            </div>
            <input type="file" name="image">
            
            <select name="pet[category_id]">
                @foreach($categories as $category)
                <option value="{{ $category->id }}">{{ $category->name }}</option>
                @endforeach
            </select>
            <input type="submit" value="保存"/>
        </form>
@endsection

