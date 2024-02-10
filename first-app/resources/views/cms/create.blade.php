@extends('layouts.layout')

@section('title', 'Add New Film')

@section('content')
    <h1>Add New Film</h1>

    <form action="{{ route('cms.store') }}" method="POST">
        @csrf
        
        <div>
            <label for="filmTitle">Title:</label>
            <input type="text" id="filmTitle" name="filmTitle" required>
        </div>

        <div>
            <label for="filmCertificate_id">Certificate:</label>
            <select id="filmCertificate_id" name="filmCertificate_id" required>
                @foreach($certificates as $certificate)
                    <option value="{{ $certificate->id }}">{{ $certificate->filmCertificate }}</option>
                @endforeach
            </select>
        </div>

        <div>
            <label for="filmDescription">Description:</label>
            <textarea id="filmDescription" name="filmDescription" required></textarea>
        </div>

        <div>
            <label for="filmImage">Image:</label>
            <input type="text" id="filmImage" name="filmImage" required>
        </div>

        <div>
            <label for="filmPrice">Price:</label>
            <input type="number" id="filmPrice" name="filmPrice" required>
        </div>

        <div>
            <label for="starRating">Star Rating:</label>
            <input type="number" id="starRating" name="starRating" required>
        </div>

        <div>
            <label for="releaseDate">Release Date:</label>
            <input type="date" id="releaseDate" name="releaseDate" required>
        </div>

        <button type="submit">Add Film</button>
    </form>
@endsection
