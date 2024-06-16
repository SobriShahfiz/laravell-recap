
@extends('app')

@section('content')
@include('header')

    <h1>Services Page</h1>
    
    <h2>Public Services Offered:</h2>
    <ul>
        @foreach($publicServices as $service)
            <li>{{ $service }}</li>
        @endforeach
    </ul>
        
@include('footer')
@endsection
