<?php

namespace App\Http\Controllers;

use App\Models\Film;
use Illuminate\Http\Request;

class FilmController extends Controller
{
    //
    public function welcome()
    {
        // Uses Eloquent
        $films = Film::orderBy('film_release_date', 'desc')->limit(6)->get();
        //dd($films);
        return view('welcome', ['films' => $films]);
    }
    public function getAll()
    {
        // Uses Query Builder
        // $films = DB::table('Films')->get();
        // Uses Eloquent
        $films = Film::all();
        //dd($films);
        return view('allfilms', ['films' => $films]);
    }
    public function getOne($id)
    {
        // Uses Query Builder
        // $film = DB::table('Films')->where('id', $id)->first();
        // Uses Eloquent
        $film = Film::find($id);
        //dd($film);
        return view('film', ['film' => $film]);
    }
    public function search(Request $request)
    {
        // Retrieve the search query from the request
        $query = $request->input('query');

        // Perform the search using the query
        $films = Film::where('film_title', 'like', "%$query%")->get();

        // Return the search results to the view
        return view('search', ['films' => $films, 'query' => $query]);
    }
}
