<?php

namespace App\Http\Controllers;

use Auth;
use App\Genre;
use App\Movie;
use Illuminate\Http\Request;

class MovieController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $movie = Movie::all();
        return view('admin/manageMovie', ['film'=>$movie]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $genre = Genre::all();
        return view('admin/addMovie', ['genre'=>$genre]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => ['required'],
            'genre' => ['required'],
            'description' => ['required','max:255'],
            'rate' => ['required', 'numeric', 'between:1,10'],
            'myFile' => ['required', 'mimes:jpeg,png,jpg'],
        ]);

        $request->myFile->move(storage_path('app/public/moviepicture'), $request->myFile->getClientOriginalName());
        $movie = new Movie;
        $movie->title = $request->name;
        $movie->genre_id= $request->genre;
        $movie->description= $request->description;
        $movie->rating = $request->rate;
        $movie->picture= $request->myFile->getClientOriginalName();
        $movie->user_id= Auth::id();
        $movie->save();
        
        return redirect('/manage/movie');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Movie  $movie
     * @return \Illuminate\Http\Response
     */
    public function show(Movie $movie)
    {
        $movies= Movie::find($movie->id);
        return view('movieDetail',['movie'=>$movies]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Movie  $movie
     * @return \Illuminate\Http\Response
     */
    public function edit(Movie $movie)
    {
        $genre = Genre::all();
        return view('/admin/editMovie', ['movie'=>$movie],['genre'=>$genre]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Movie  $movie
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Movie $movie)
    {
        $request->validate([
            'name' => ['required'],
            'genre' => ['required'],
            'description' => ['required'],
            'rate' => ['required', 'numeric', 'between:1,10'],
            'myFile' => ['required', 'mimes:jpeg,png,jpg'],
        ]);

        unlink(storage_path('app/public/moviepicture/'.$movie->picture));
        $request->myFile->move(storage_path('app/public/moviepicture'), $request->myFile->getClientOriginalName());
        $movies = Movie::where('id', $movie->id)
        ->update([
            'title' => $request->name,
            'genre_id'=>$request->genre,
            'description'=>$request->description,
            'rating' =>$request->rate,
            'picture'=>$request->myFile->getClientOriginalName(),
            'user_id'=> Auth::id()

        ]);
        return redirect('/manage/movie');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Movie  $movie
     * @return \Illuminate\Http\Response
     */
    public function destroy(Movie $movie)
    {
        unlink(storage_path('app/public/moviepicture/'.$movie->picture));
        Movie::destroy($movie->id);
        return redirect('/manage/movie');
    }
}
