@extends('layouts.app')
@section('content' ) 
<h1>create post</h1>
{!! Form::open(['action' => 'App\Http\Controllers\PostsController@store' , 'method' => 'POST']) !!}
    <div class ="form-group">
        {{Form::label('title' ,'Title')}}
         {{Form::text('title' , '' , ['class' => 'form-control' , 'placeholder' => 'Tiltle'])}}
    </div>
    <div class ="form-group">
         {{Form::label('body' ,'Body')}}
          {{Form::textarea('body' , '' , ['class' => 'form-control' , 'placeholder' => 'Body text' ,'id' => 'editor'])}}

    </div>
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