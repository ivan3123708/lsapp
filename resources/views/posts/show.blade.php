@extends('layouts.app')

@section('content')
  <a href="/lsapp/public/posts" class="btn btn-default">Go Back</a>
  <h1>{{ $post->title }}</h1>
  <small>written on {{ $post->created_at }}</small>
  <div>
    {!! $post->body !!}
  </div>
  <hr>
  <a href="/lsapp/public/posts/{{ $post->id }}/edit" class="btn btn-default">Edit</a>
  {!! Form::open(['action' => ['PostsController@destroy', $post->id], 'method' => 'POST', 'class' => 'float-right']) !!}
    {{ Form::hidden('_method', 'DELETE') }}
    {{ Form::submit('Delete', ['class' => 'btn btn-danger']) }}
  {!! Form::close() !!}
@endsection