@extends('layout')
@section('content')
<section>
  <form action="{{ route('post.update', $post->id) }}" method="post" class="create-form">
    @csrf
    @method('patch')
    <label>
      Post title
      <input 
        type="text" 
        name="title" 
        class="@error('title') _error @enderror"
        value="{{$post->title}}"
      >
    </label>
    <label>
      Post content
      <textarea 
        name="body" 
        cols="30" rows="10" 
        resize="none" 
        class="@error('body') _error @enderror"
      >{{$post->body}}</textarea>
    </label>
    <select 
      name="category_id" 
      class="@error('category_id') _error @enderror"
    >
      @foreach($categories as $category)
        <option 
          {{$category->id === $post->category->id ? 'selected' : ''}}
          value="{{$category->id}}"
        >{{$category->name}}</option>
      @endforeach
    </select>
    <select 
      multiple
      name="tags[]" 
      class="@error('tags') _error @enderror"
    >
      @foreach($tags as $tag)
        <option 
          {{ $post->tags->contains('id', $tag->id) ? 'selected' : '' }}
          value="{{$tag->id}}"
        >{{$tag->name}}</option>
      @endforeach
    </select>
    <button class="btn btn_right" type="submit">Save</button>
  </form>
</section>
@endsection