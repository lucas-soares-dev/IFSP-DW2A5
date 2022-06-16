<?php

namespace App\Http\Controllers;

use App\Models\Movie;
use Exception;
use Illuminate\Http\Request;

class MoviesController extends Controller
{
    public function index()
    {
        $movies = Movie::all();
        return view('home', [
            'movies' => $movies
        ]);
    }

    /**
     * Show view create movie
     *
     * @return void
     */
    public function create()
    {
        return view('movies.save');
    }
    
    /**
     * Save movie in database
     *
     * @param  Request $request
     * @return void
     */
    public function store(Request $request)
    {
        try {
            $this->validate($request, [
                'name' => 'required|string',
                'genres' => 'required|array',
                'link_trailer' => 'required|url',
                'release_year' => 'required|integer'
            ]);

            Movie::create($request->toArray());

            return redirect('/')->with('success', 'Filme criado com sucesso!');
        } catch (Exception $e) {
            return back()->with('error', $e->getMessage());
        }
    }
}
