@extends('layouts.app')　　　　　　　　　　　　　　　　　　

@section('content')

  <div style="width: 56rem; margin:auto;">
    <div class="row row-cols-1 row-cols-md-3" style="margin: 1rem;">
    @foreach($posts as $post)
      @if ($post->image_path)
        <!-- 画像を表示 -->
        <div  class="h-100" style="margin-bottom:1rem;">
          <a href="/post/{{ $post->id }}"><img src="{{ $post->image_path }}" style="width: 16rem;"></a>
        </div>
        
      @endif
    @endforeach
    </div>
</div>
@endsection
