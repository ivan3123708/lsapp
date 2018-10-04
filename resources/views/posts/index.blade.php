@extends('layouts.app')

@section('content')
  <h1>Posts</h1>

  @if(count($posts) > 0)
    @foreach($posts as $post)
      <div class="card">
        <div class="row">
          <div class="col-md-4 col-sm-4">
            <img src="/lsapp/public/storage/cover_images/{{ $post->cover_image }}" style="max-height: 100px; max-width: 200px"/>
          </div>
          <div class="col-md-8 col-sm-8">
            <h4><a href="/lsapp/public/posts/{{ $post->id }}">{{ $post->title }}</a></h4>
            <small>Written on {{ $post->created_at }} by {{ $post->user->name }}</small>
          </div>
        </div>
      </div>
    @endforeach
  @else
    <p>No post found.</p>
  @endif
  <a class="btn btn-primary" href="/lsapp/public/posts/create">Create Post</a>
@endsection