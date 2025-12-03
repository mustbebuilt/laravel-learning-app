@extends('layouts.layout')

@section('title', 'Search Results')

@section('content')
    <h1>Search Results</h1>
    <ul>
        @foreach($films as $film)
            <li>
                <a href="{{ url('/film', $film->id) }}">
                    {{ $film->film_title }} - {{ $film->certificate->film_certificate }}
                </a>
            </li>
        @endforeach
    </ul>
@endsection
