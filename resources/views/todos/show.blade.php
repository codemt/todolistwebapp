@extends('layouts.app')

@section('content')
<div class="jumbotron">
        <h1 class="display-3"><a href="todos/{{$todo->id}}">{{ $todo->text }} </a> </h1>
        {{-- <p class="lead">{{ $todo->body }}</p> --}}
        
        <p>{{ $todo->body }}</p>
        <p class="lead">
        </p>
        <hr class="my-4">
      </div>
            
    <a class="btn btn-default" href="/todos"> Go Back </a>

@endsection