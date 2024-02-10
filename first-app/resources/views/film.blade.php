@extends('layouts.layout')

@section('title', 'One Film')

@section('content')
    <div>
        <h1>{{ $film->filmTitle }} {{$film->certificate->filmCertificate }}</h1>
        <p>{{ $film->filmDescription }}</p>
        <p>Price: &pound;{{ $film->filmPrice }}</p>
        <p>Stars: {{ $film->stars }}</p>
        <p>Release Date: {{ $film->releaseDate }}</p>
        <!-- Add more details as needed -->
    </div>
@endsection
