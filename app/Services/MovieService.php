<?php

namespace App\Services;

use App\Models\Movie;

class MovieService
{
    public function getMovies()
    {
        return Movie::get();
    }

    public function getMoviesByCategory($category)
    {
        return Movie::where('category_id', $category->id)->get();
    }

    public function getMovie($movie)
    {
        return Movie::find($movie);
    }
    
    public function updateMovie($request, $movie)
    {
        $movie = Movie::find($movie);
        
        $movie->title = $request->title;
        $movie->description = $request->description;
        $movie->rate = $request->rate;
        $movie->category_id = $request->category_id;

        $movie->save();
        
        return $movie; 
    }

    public function deleteMovie($movie)
    {
        Movie::find($movie)->delete();
    }
}
