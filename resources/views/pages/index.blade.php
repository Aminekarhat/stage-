@extends('layouts.app')

@section('content')
 <div class="p-5 mb-4 bg-body-tertiary rounded-3">
    <div class="container-fluid py-5">
        <h1>{{$title}}</h1>
        <p>this is the homepage of the project </p> 
        <div class="d-flex">
            <a class="btn btn-primary" href="\stage\public\login">login</a>
            <a class="btn btn-success ms-2" href="\stage\public\register">register</a>
        </div>
    </div>
</div>
@endsection
    
