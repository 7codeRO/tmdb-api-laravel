<?php

namespace App\Http\Controllers\API;

use App\FavoriteMovie;
use Illuminate\Http\Request;
use Tmdb\Laravel\Facades\Tmdb;
use Tmdb\Repository\MovieRepository;
use App\Http\Controllers\Controller;

class FavoriteMovieController extends Controller
{

    private $movies;

    function __construct(MovieRepository $movies)
    {
        $this->movies = $movies;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $currentUser = \Auth::user();
        $favoriteMovies = $currentUser->favoriteMovies;

        $movies = [];
        foreach ($favoriteMovies as $favMovie)
        {
            try {
                $tmdbMovie = Tmdb::getMoviesApi()->getMovie($favMovie->tmdb_video_id);
            } catch (\Exception $e) {
                $tmdbMovie = null;
            }
        }

        return response()->json($favoriteMovies);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validator = \Validator::make($request->all(), [
            'movie_id' => 'required'
        ]);

        if ($validator->fails()) {
            return response()->json($validator->errors());
        }

        $currentUser = \Auth::user();

        $favoriteMovie = new FavoriteMovie();
        $favoriteMovie->tmdb_movie_id = $request->get('movie_id');
        $favoriteMovie->user_id = $currentUser->id;
        $favoriteMovie->save();

        return response()->json($favoriteMovie);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
