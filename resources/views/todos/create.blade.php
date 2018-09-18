@extends('layouts.app')


@section('content')

<form action="{{ route('store') }}" method="post">
        {{ csrf_field() }}
                <input type="text" name="title" id="">
                <input type="text" name="body" id="">
                <button type="submit" class="btn btn-primary">Submit</button>

        </form>




@endsection