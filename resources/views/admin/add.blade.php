@extends('layouts.master')

@section('content')
  <h1 class="text-center">ADD POST</h1>
  <form action="{{ isset($post) ? route('edit') : route('add') }}" method='POST'>
    @csrf
    <div class="mb-3">
      <label for="title" class="form-label">Title</label>
      <input type="text" class="form-control" id="title" name="title" value="{{ isset($post) ? $post['title'] : '' }}"
        placeholder="Awesome title">
    </div>
    <div class="mb-3">
      <label for="content" class="form-label">Content</label>
      <textarea name="content" class="form-control" id="content"
        rows="3">{{ isset($post) ? $post['content'] : '' }}</textarea>
    </div>
    <input type="hidden" value="{{ isset($post) ? $post['id'] : '' }}" name="id">
    <button type="submit" class="btn btn-primary mb-3">{{ isset($post) ? 'EDIT' : 'ADD' }}</button>
  </form>
@endsection
