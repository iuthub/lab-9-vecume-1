@extends('layouts.master')
@section('content')
  <div class="row">
    <h1 class="text-center">BLOG</h1>
    @foreach ($posts as $post)
      <x-post :post="$post"></x-post>
    @endforeach
  </div>
@endsection
