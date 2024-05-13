@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Dashboard') }}</div>

                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif

                        <a class="btn btn-primary" href="/posts/create">Create Post</a>
                        <h3>your blog posts</h3>

                        <table class ="table table-striped">
                            <tr>
                                <th>title</th>
                                <th></th>
                                <th></th>
                            </tr>
                            @foreach ($posts as $post)
                                <tr>
                                    <th>{{ $post->title }}</th>
                                    <th><a href ="/posts/{{ $post->id }}/edit" class = "btn btn-default"> Edit </a>
                                    </th>
                                    <th>
                                        {!! Form::open(['action' => ['App\Http\Controllers\PostsController@destroy', $post->id], 'methode' => 'POST']) !!}
                                        {{ Form::hidden('_method', 'DELETE') }}
                                        {{ Form::submit('delete', ['class' => 'btn btn-danger']) }}

                                        {!! Form::close() !!}
                                    </th>
                                </tr>
                            @endforeach
                        </table>



                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
