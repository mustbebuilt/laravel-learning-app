@extends('layouts.layout')

@section('title', 'All Films')

@section('content')
    <h1>Welcome</h1>
       
    <h2>Latest Films</h2>
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
