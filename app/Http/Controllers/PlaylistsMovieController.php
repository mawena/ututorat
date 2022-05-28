<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Playlist;
use Illuminate\Http\Request;
use App\Models\Playlists_movie;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class PlaylistsMovieController extends Controller
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
        $playlists_movie = Playlists_movie::all()
            ->where('user_id', Auth::user()->id)
            ->where('movie_id', $request->movie_id);
        if (count($playlists_movie) == 0) {
            $playlist_id = 0;
            $playlist = Playlist::all()->where('user_id', Auth::user()->id);
            if (count($playlist) == 0) {
                $playlist = Playlist::create([
                    'user_id' => Auth::user()->id,
                    'title' => '-',
                    'description' => '-',
                ]);
                $playlist_id = $playlist->id;
            }else{
                $playlist_id = User::find(Auth::user()->id)->playlist->id;
            }
            Playlists_movie::create([
                'playlist_id' => $playlist_id,
                'movie_id' => $request->movie_id
            ]);
        }
        return redirect(route('watch', $request->movie_id));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Playlists_movie  $playlists_movie
     * @return \Illuminate\Http\Response
     */
    public function show(Playlists_movie $playlists_movie)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Playlists_movie  $playlists_movie
     * @return \Illuminate\Http\Response
     */
    public function edit(Playlists_movie $playlists_movie)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Playlists_movie  $playlists_movie
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Playlists_movie $playlists_movie)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Playlists_movie  $playlists_movie
     * @return \Illuminate\Http\Response
     */
    public function destroy(Playlists_movie $playlists_movie)
    {
        //
    }
}
