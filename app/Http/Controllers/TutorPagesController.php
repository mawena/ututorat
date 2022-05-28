<?php

namespace App\Http\Controllers;

use App\Models\Movie;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Tutors_playlist;
use Illuminate\Support\Facades\Auth;

class TutorPagesController extends Controller
{
    public function add_playlist(){
        return view('pages.tutors_pages.playlist_form', [
            'movies' => Movie::all()->where('user_id', Auth::user()->id)
        ]);
    }

    public function activities(){
        return view('pages.tutors_pages.activities');
    }

    public function playlists(){
        return view('pages.tutors_pages.playlists',[
            'playlist' => Tutors_playlist::all()->where('user_id', Auth::user()->id),
            'movies' => Movie::all()->where('user_id', Auth::user()->id)
        ]);
    }

    public function movies(){
        return view('pages.tutors_pages.movies', [
            'movies' => Movie::all()->where('user_id', Auth::user()->id)
        ]);
    }

}
