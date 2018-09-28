@extends('layouts.app')

@section('content')
  <a href="/lsapp/public/posts" class="btn btn-default">Go Back</a>
  <h1>{{ $post->title }}</h1>
  <small>written on {{ $post->created_at }}</small>
  <div>
    {{ $post->body }}
  </div>
@endsection