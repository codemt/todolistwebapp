@extends('layouts.app')


@section('content')

<form action="{{ route('store') }}" method="post">
        {{ csrf_field() }}
                <input type="text" name="title" id="" placeholder="enter title">
                <br>
                <input type="text" name="body" id="" placeholder="enter body">
                <br>
                <input type="text" name="due" id="" placeholder="enter due date">
                <br>
                <button type="submit" class="btn btn-primary">Submit</button>

        </form>




@endsection