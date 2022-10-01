@extends('layouts.app')　　　　　　　　　　　　　　　　　　

@section('content')

        <form action="/pet/store" method="POST"  enctype="multipart/form-data">
            @csrf
            <div class="card" style="width:18rem; margin: auto; ">
                <div class="card-header">
                    ペットを登録する
                </div>
                
                <div class="card-title" style="margin: 1rem 1rem 0 1rem;">
                    <h2>Name</h2>
                    <input type="text" name="pet[name]" placeholder="Taro"/>
                </div>
                
                <div class="card-title" style="margin:1rem 1rem 0 1rem;">
                    <h2>Age</h2>
                    <input type="number" name="pet[age]" placeholder="1歳"/>
                </div>
                
        
                <input type="file" style="margin:1rem 1rem 0 1rem;" name="image" >
                
                <div class="card-title" style="margin:1rem 1rem 0 1rem;">
                    <h2>Category</h2>
                    <input type="text" name="pet[category_name]" placeholder="ねこ"/>
                </div>
                
                <input type="hidden" name="pet[user_id]" value="{{ $id }}">
                
                <div style="margin:1rem;">
                    <button type="submit" class="btn btn-primary　m-1">保存</button>
                </div>
            </div>
        </form>
@endsection
