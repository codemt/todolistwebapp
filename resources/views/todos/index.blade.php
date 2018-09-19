@extends('layouts.app')

@section('content')
            {{-- <h1> Todos </h1> --}}

            @if(count($todos) > 0 )

                @foreach($todos as $todo)

                <div class="jumbotron">
                        <h1 class="display-3"><a href="todos/{{$todo->id}}">{{ $todo->text }} </a> </h1>
                        {{-- <p class="lead">{{ $todo->body }}</p> --}}
                        <hr class="my-4">
                        <p>{{ $todo->due }}</p>
                        <p class="lead">
                        </p>
                    <a href="todos/{{$todo->id}}/edit"> Edit </a>
                    <form action="{{ route('delete' ) }}" method="post">
                        {{ csrf_field() }}
                    <input type="hidden" name="todoId" value="{{ $todo->id }}">
                    <button type="submit" class="btn btn-primary pull-right">delete</button>
                    </form>
                  
                      </div>
             
                @endforeach

            @endif

    
                 

@endsection

