@extends('layouts.app')

@section('content')
  <h1>Posts</h1>

  @if(count($posts) > 0)
    @foreach($posts as $post)
      <div class="card">
        <h4><a href="/lsapp/public/posts/{{ $post->id }}">{{ $post->title }}</a></h4>
        <small>Written on {{ $post->created_at }}</small>
      </div>
    @endforeach
  @else
    <p>No post found.</p>
  @endif
  <a class="btn btn-primary" href="/lsapp/public/posts/create">Create Post</a>
@endsection