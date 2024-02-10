@extends('layouts.layout')

@section('title', 'All Films')

@section('content')
    <h1>All Films</h1>
    <ul>
        @foreach($films as $film)
            <li>
                <a href="{{ url('/film', $film->id) }}">
                    {{ $film->filmTitle }} - {{ $film->certificate->filmCertificate }}
                </a>
            </li>
        @endforeach
    </ul>
@endsection
