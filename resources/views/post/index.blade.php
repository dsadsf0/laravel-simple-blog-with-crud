@extends('layout')
@section('content')
<section>
  <div class="posts-container">
    @foreach ($posts as $key => $post)
      <a class="post-link" href="{{route('post.show', $post->id)}}">
        <h2 class="post-link__title">{{$key + 1}}. {{ $post->title }}</h2>
      </a>
    @endforeach
  </div>
  <div>
    {{ $posts->links() }}
  </div>
</section>
@endsection