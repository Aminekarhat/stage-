@extends('layouts.app')
@section('content' ) 
   <h1>Posts</h1>
   @if(count($posts) > 1 ) 
   <div class ="well">
      @foreach($posts as $post)
    <h3><a href="/posts/{{$post->id}}">{{$post->title}}</a></h3>
    <small>written on {{$post->created_at}} by {{$post->user->name}} </small>
    

   </div>
           @endforeach

           {{$posts->links()}}

    @else 
    <p>No posts found </p> 
    @endif
    
@endsection 