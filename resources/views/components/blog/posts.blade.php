@extends('layouts.master')
@section('content')
  <div class="row">
    @foreach ($posts as $post)
      <x-post :post="$post"></x-post>
    @endforeach
  </div>
@endsection
