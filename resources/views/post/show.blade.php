@extends('layouts.app')　　　　　　　　　　　　　　　　　　

@section('content')

    <div class="card mb-3" style="display:flex; margin:1rem;">
      <div class="row g-0">
        <div class="col-md-4">
           @if ($post->image_path)
                <a href="/post/{{ $post->id }}"><img style="width:27rem;" src="{{ $post->image_path }}"></a>
           @endif
        </div>
        <div class="col-md-8">
          <div class="card-body">
            <h5 class="card-title">Comments</h5>
                <div style="overflow: scroll;">
                    @foreach($comments as $comment)
                        <p class="card-text"> {{ $comment->comment }}</p>
                    @endforeach  
                </div>
          </div>
          <form action="/post/store_comment" method="POST">
              @csrf
              <div class="form-floating" style="margin:1rem;">
                  <textarea class="form-control" name="comments[comment]" placeholder="かわいい!"></textarea>
                  <input type="hidden" name="comments[post_id]" value="{{$post->id}}">
                  <input type="hidden" name="comments[user_id]" value="{{$user->id}}">
                  <input   class="btn btn-primary m-1" type="submit" value="保存"/>
              </div>
          </form>
        </div>
      </div>
    </div>
@endsection
