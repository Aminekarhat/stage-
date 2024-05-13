@extends('layouts.app')
@section('content' ) 
<h1>create post</h1>
{!! Form::open(['action' => ['App\Http\Controllers\PostsController@update' , $post->id] , 'methode' => 'POST']) !!}
    <div class ="form-group">
        {{Form::label('title' ,'Title')}}
         {{Form::text('title' , $post->title , ['class' => 'form-control' , 'placeholder' => 'Tiltle'])}}
    </div>
    <div class ="form-group">
         {{Form::label('body' ,'Body')}}
          {{Form::textarea('body' , $post->body , ['class' => 'form-control' , 'placeholder' => 'Body text' ,'id' => 'editor'])}}

    </div>
    {{Form::hidden('_method' ,'PUT')}}
     {{Form::submit('Submit' , ['class' => 'btn btn-primary'])}}
{!! Form::close() !!}
@endsection 

@section('scripts')
<script>
    ClassicEditor
        .create( document.querySelector( '#editor' ) )
        .catch( error => {
            console.error( error );
        } );
</script>

@endsection