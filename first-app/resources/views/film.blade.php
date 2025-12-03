@extends('layouts.layout')

@section('title', 'One Film')

@section('content')
    <div>
        <h1>{{ $film->film_title }} {{$film->certificate->film_certificate }}</h1>
        <p>{{ $film->film_description }}</p>
        <p>Price: &pound;{{ $film->film_price }}</p>
        <p>Stars: {{ $film->star_rating }}</p>
        <p>Release Date: {{ $film->release_date }}</p>
        <!-- Add more details as needed -->
    </div>
@endsection
