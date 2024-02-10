@extends('layouts.layout')

@section('title', 'All Films')

@section('content')
    <h1>CMS</h1>
    <p>Content Management System</p>
    <ul>
        @foreach($films as $film)
            <li>
                <a href="{{ url('/film', $film->id) }}">
                    {{ $film->filmTitle }} - {{ $film->certificate->filmCertificate }}
                </a>
                <a href="{{ route('cms.edit', $film->id) }}">Edit</a>
                <form action="{{ route('cms.destroy', $film->id) }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button type="submit">Delete</button>
                </form>
            </li>
        @endforeach
    </ul>
    <a href="{{ route('cms.create') }}">Add New Film</a>
@endsection
