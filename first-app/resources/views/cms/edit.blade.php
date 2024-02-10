<!-- resources/views/cms/edit.blade.php -->

@extends('layouts.layout')

@section('title', 'Edit Film')

@section('content')
    <h1>Edit Film</h1>

    <form action="{{ route('cms.update', $film->id) }}" method="POST">
        @csrf
        @method('PUT')
        
        <div>
            <label for="filmTitle">Title:</label>
            <input type="text" id="filmTitle" name="filmTitle" value="{{ $film->filmTitle }}" required>
        </div>

        <div>
            <label for="filmCertificate_id">Certificate:</label>
            <select id="filmCertificate_id" name="filmCertificate_id" required>
                @foreach($certificates as $certificate)
                    <option value="{{ $certificate->id }}" @if($certificate->id == $film->filmCertificate_id) selected @endif>{{ $certificate->filmCertificate }}</option>
                @endforeach
            </select>
        </div>

        <div>
            <label for="filmDescription">Description:</label>
            <textarea id="filmDescription" name="filmDescription" required>{{ $film->filmDescription }}</textarea>
        </div>

        <div>
            <label for="filmImage">Image:</label>
            <input type="text" id="filmImage" name="filmImage" value="{{ $film->filmImage }}" required>
        </div>

        <div>
            <label for="filmPrice">Price:</label>
            <input type="number" id="filmPrice" name="filmPrice" value="{{ $film->filmPrice }}" required>
        </div>

        <div>
            <label for="starRating">Star Rating:</label>
            <input type="number" id="starRating" name="starRating" value="{{ $film->starRating }}" required>
        </div>

        <div>
            <label for="releaseDate">Release Date:</label>
            <input type="date" id="releaseDate" name="releaseDate" value="{{ $film->releaseDate }}" required>
        </div>

        <button type="submit">Update Film</button>
    </form>
@endsection
