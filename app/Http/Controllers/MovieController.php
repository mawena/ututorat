<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Movie;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Image;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class MovieController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // dd($request);
        $validated = $request->validate([
            'title' => 'required|min:3|max:100',
            'description' => 'required|min:3|max:300',
            // 'image' => 'required|mimes:jpg,jpeg,png',
            // 'movie' => 'required|mimes:mp4,avi,mkw|max:30720',
        ]);
        $user = User::find(Auth::user()->id);
        $path = Storage::putFile(
            'movie/'.$user->id, $request->file('movie')->movie
        );
        $movie = Movie::create([
            'user_id' => $user->id,
            'title' => $request->title,
            'category_id' => $request->category,
            'description' => $request->description,
            'path' => $path
        ]);
        $path = Storage::putFile(
            'image/'.$user->id, $request->file('image')->image
        );
        Image::create([
            'path' => $path,
            'imageable_id' => $movie->id,
            'imageable_type' => '\App\Models\Movie'
        ]);
        return redirect(route('teach_the_world/movie_form'));

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Movie  $movie
     * @return \Illuminate\Http\Response
     */
    public function show(Movie $movie)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Movie  $movie
     * @return \Illuminate\Http\Response
     */
    public function edit(Movie $movie)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Movie  $movie
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Movie $movie)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Movie  $movie
     * @return \Illuminate\Http\Response
     */
    public function destroy(Movie $movie)
    {
        //
    }
}
