<?php

namespace App\Http\Controllers;

use App\Models\Film;
use App\Models\Certificate;
use Illuminate\Http\Request;

class CMSController extends Controller
{
    public function index()
    {
        // Retrieve all films
        $films = Film::all();

        // Return films to the view
        return view('cms.index', ['films' => $films]);
    }

    public function edit(Film $film)
    {
        // Retrieve all certificates
        $certificates = Certificate::all();

        // Return the edit form for the specified film along with certificates data
        return view('cms.edit', ['film' => $film, 'certificates' => $certificates]);
    }

    public function update(Request $request, Film $film)
    {
        // Update the film data based on the form input
        $film->update($request->all());

        // Redirect back to the CMS index page
        return redirect()->route('cms')->with('success', 'Film updated successfully.');
    }

    public function destroy(Film $film)
    {
        // Delete the specified film
        $film->delete();

        // Redirect back to the CMS index page
        // return redirect()->route('cms.index')->with('success', 'Film deleted successfully.');
        return redirect()->route('cms')->with('success', 'Film deleted successfully.');
    }

    public function create()
    {
        // Return the form for creating a new film
        // Retrieve all certificates
        $certificates = Certificate::all();
        return view('cms.create', ['certificates' => $certificates]);
    }

    public function store(Request $request)
    {
        // Validate the form data
        $validatedData = $request->validate([
            'filmTitle' => 'required|string|max:255',
            'filmCertificate_id' => 'required|integer', // Changed to filmCertificate_id and integer validation
            'filmDescription' => 'required|string', // Add validation rules for filmDescription
            'filmImage' => 'required|string', // Add validation rules for filmImage
            'filmPrice' => 'required|numeric', // Add validation rules for filmPrice
            'starRating' => 'required|numeric', // Add validation rules for starRating
            'releaseDate' => 'required|date', // Add validation rules for releaseDate
            // Add validation rules for other fields as needed
        ]);

        // Create a new film record with the validated data
        Film::create($validatedData);

        // Redirect back to the CMS index page
        // return redirect()->route('cms.index')->with('success', 'Film created successfully.');
        return redirect()->route('cms')->with('success', 'Film created successfully.');
    }
}
