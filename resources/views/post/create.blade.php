@extends('layouts.app')　　　　　　　　　　　　　　　　　　

@section('content')

        <form action="post/store" method="POST"  enctype="multipart/form-data">
            @csrf
            <div class="card" style="width:18rem; margin: auto; ">
                <div class="card-header">
                    新規投稿を作成
                </div>
                <input type="file" style="margin:1rem" name="image" >
                <input type="hidden" name="posts[pet_id]" >
                <button type="submit" class="btn btn-primary　m-1">投稿する</button>
            </div>
        </form>
        
@endsection
