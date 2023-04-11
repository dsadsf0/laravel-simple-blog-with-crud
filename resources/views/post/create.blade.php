@extends('layout')
@section('content')
<section>
  <form action="{{ route('post.store') }}" method="post" class="create-form">
    @csrf
    <label>
      Post title
      <input 
        type="text" 
        name="title" 
        class="@error('title') _error @enderror"
        value="{{ old('title') }}"
      >
    </label>
    <label>
      Post content
      <textarea 
        name="body" 
        cols="30" rows="10" 
        resize="none" 
        class="@error('body') _error @enderror"
      >{{ old('body') }}</textarea>
    </label>
    <select 
      name="category_id" 
      class="@error('category_id') _error @enderror"
    >
      @foreach($categories as $category)
        <option 
          {{ $category->id === old('category_id') ? 'selected' : ''}}
          value="{{$category->id}}">{{$category->name}}</option>
      @endforeach
    </select>
    <select 
      multiple
      name="tags[]" 
      class="@error('tags') _error @enderror"
    >
      @foreach($tags as $tag)
        <option 
          {{ old('tags') && in_array($tag->id, old('tags')) ? 'selected' : ''}}
          value="{{$tag->id}}">{{$tag->name}}</option>
      @endforeach
    </select>
    <button class="btn btn_right" type="submit">Create post</button>
  </form>
</section>
@endsection