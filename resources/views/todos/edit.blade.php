@extends('layouts.app')


@section('content')

<form action="{{ route('update') }}" method="post">
        {{ csrf_field() }}
                <input type="text" name="title" id="" value="{{ $todo->text}}">
                <br>
                <input type="text" name="body" id="" value="{{ $todo->body}}">
                <br>
                <input type="text" name="due" id="" value="{{ $todo->due}}">
                <input type="hidden" name="todoId" value="{{  $todo->id }}">
                <br>
                <button type="submit" class="btn btn-primary">Submit</button>

        </form>




@endsection