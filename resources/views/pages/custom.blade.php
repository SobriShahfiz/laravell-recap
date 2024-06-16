
@extends('app')

@section('content')
@include('header')

    <h1>Numbers Page</h1>
    
    <h2>Numbers in Array:</h2>
    <ul>
        @foreach($numbers as $number)
            <li>{{ $number }}</li>
        @endforeach
    </ul>

@include('footer')
@endsection
