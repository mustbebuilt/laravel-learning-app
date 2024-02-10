@extends('layouts.layout')

@section('title', 'All Films')

@section('content')
    <h1>CMS</h1>
    <p>Content Management System</p>

    <table>
        <thead>
            <tr>
                <th>Title</th>
                <th>Certificate</th>
                <th>Edit</th>
                <th>Delete</th>
            </tr>
        </thead>
        <tbody>
            @foreach($films as $film)
                <tr>
                    <td>
                        <a href="{{ url('/film', $film->id) }}">
                            {{ $film->filmTitle }}
                        </a>
                    </td>
                    <td>{{ $film->certificate->filmCertificate }}</td>
                    <td>
                        <a href="{{ route('cms.edit', $film->id) }}">Edit</a>
                    </td>
                    <td>
                        <form action="{{ route('cms.destroy', $film->id) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

    <a href="{{ route('cms.create') }}">Add New Film</a>
@endsection
