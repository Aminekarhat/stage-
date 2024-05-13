@extends('layouts.app')
@section('content')
    <a href="/posts" class="btn btn-default"> Go Back</a>
    <h1>{{ $post->title }}</h1>

    <div>
        {!! $post->body !!} <br>
    </div>
    @if (!Auth::guest())
        @if(Auth::user()->id == $post->user_id)
        <a href="/posts/{{ $post->id }}/edit" class="btn btn-default"> Edit</a>
        {!! Form::open(['action' => ['App\Http\Controllers\PostsController@destroy', $post->id], 'methode' => 'POST']) !!}
        {{ Form::hidden('_method', 'DELETE') }}
        {{ Form::submit('delete', ['class' => 'btn btn-danger']) }}

        {!! Form::close() !!}
        @endif
    @endif

    <hr>
    <small>written on {{ $post->created_at }} by {{ $post->user->name }}</small>
    </hr>
@endsection
