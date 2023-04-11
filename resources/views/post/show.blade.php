@extends('layout')
@section('content')
<section>
  <div class="post-block">
    <h2 class="post-block__title">{{ $post->title }}</h2>
    <p class="post-block__text">{{ $post->body }}</p>
    <div class="post_block__footer">
      <div>
        Category:<span> {{$post->category->name}}.</span>
      </div>
      <div>
        Tags:
        @foreach ($post->tags as $key => $tag)
          <span> {{$tag->name}}{{ $key !== count($post->tags) - 1 ? "," : '.' }}</span>
        @endforeach
      </div>
    </div>
    <div class="post-block__btns">
      <a class="btn" href="{{route('post.edit', $post->id)}}">Edit post</a>
      <form action="{{route('post.delete', $post->id)}}" method="post">
        @csrf
        @method('delete')
        <button class="btn btn_right" type="submit">Delete post</button>
      </form>
    </div>
  </div>
</section>
@endsection