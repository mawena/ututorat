<?php

namespace App\Http\Controllers;

use App\Models\Movie;
use App\Models\Comment;
use App\Models\Playlist;
use Illuminate\Http\Request;
use App\Models\Tutors_playlist;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class TutorPagesController extends Controller
{
    public function add_playlist(){
        return view('pages.tutors_pages.playlist_form', [
            'movies' => Movie::all()->where('user_id', Auth::user()->id)
        ]);
    }

    public function activities(){
        return view('pages.tutors_pages.activities',[
            'main_categories' => [
                [
                    'name' => 'new movies',
                    'data' => Movie::all()->sortBy('created_at')->where('user_id', Auth::user()->id)
                ],
                [
                    'name' => 'new playlists',
                    'data' => Tutors_playlist::all()->sortBy('created_at')->where('user_id', Auth::user()->id),
                    'alone' => false
                ],
                [
                    'name' => 'recently updated',
                    'data' => Movie::all()->sortBy('updated_at')->where('user_id', Auth::user()->id)
                ],
            ],
            'randoms' => [
                'movies' => Movie::all()->where('user_id', Auth::user()->id),
            ],
            'new_comment' => [
                'comments' => Comment::all()->sortBy('created_at')->where('user_id', Auth::user()->id)
            ],
        ]);
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
