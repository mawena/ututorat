<?php

namespace App\Http\Controllers;

use App\Models\View;
use App\Models\Movie;
use App\Models\Comment;
use App\Models\Playlist;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Models\Playlists_movie;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

class MainController extends Controller
{
    public function home()
    {
        return view('pages.home', [
            'main_categories' => [
                [
                    'name' => 'new movies',
                    'data' => Movie::all()->sortBy('created_at')->take(7)
                ],
                [
                    'name' => 'new playlists',
                    'data' => Playlist::all()->sortBy('created_at')->take(5),
                    'alone' => false
                ],
                [
                    'name' => 'recently updated',
                    'data' => Movie::all()->sortBy('updated_at')->take(7)
                ],
            ],
            'randoms' => [
                'movies' => Movie::all()->take(10),
            ],
            'new_comment' => [
                'comments' => Comment::all()->sortBy('created_at')->take(10)
            ],
        ]);
    }

    public function categories()
    {
        return view('pages.category.categories', [
            'categories' => [
                'programmation' => [
                    'name' => 'programmation',
                    'data' => Movie::all()->where('category_id', 1)
                ],
                'personnal_development' => [
                    'name' => 'personnal_development',
                    'data' => Movie::all()->where('category_id', 2)
                ],
                'right' => [
                    'name' => 'right',
                    'data' => Movie::all()->where('category_id', 3)
                ],
                'Tech' => [
                    'name' => 'Tech',
                    'data' => Movie::all()->where('category_id', 4)
                ],
                'oratorical_art' => [
                    'name' => 'oratorical_art',
                    'data' => Movie::all()->where('category_id', 5)
                ],
                'other' => [
                    'name' => 'other',
                    'data' => Movie::all()->where('category_id', 6)
                ],
            ],
            'randoms' => [
                'movies' => Movie::all()->take(10),
            ],
        ]);
    }

    public function category()
    {
        if (Route::is('programmation'))
            return view('pages.category.programmation', [
                'category' => [
                    'name' => 'Programmation',
                    'data' => Movie::all()->where('category_id', 1)->take(7),
                    'random' => Movie::all()->take(20)
                ],
            ]);
        else if (Route::is('personnal_development'))
            return view('pages.category.personnal_dev', [
                'category' => [
                    'name' => 'Personnal development',
                    'data' => Movie::all()->where('category_id', 2)->take(7),
                    'random' => Movie::all()->take(20)
                ],
            ]);
        else if (Route::is('right'))
            return view('pages.category.right', [
                'category' => [
                    'name' => 'Right',
                    'data' => Movie::all()->where('category_id', 3)->take(7),
                    'random' => Movie::all()->take(20)
                ],
            ]);
        else if (Route::is('tech'))
            return view('pages.category.tech', [
                'category' => [
                    'name' => 'Tech',
                    'data' => Movie::all()->where('category_id', 4)->take(7),
                    'random' => Movie::all()->take(20)
                ],
            ]);
        else if (Route::is('oratorical_art'))
            return view('pages.category.oratorical_art', [
                'category' => [
                    'name' => 'Oratorical Art',
                    'data' => Movie::all()->where('category_id', 5)->take(7),
                    'random' => Movie::all()->take(20)
                ],
            ]);
        else if (Route::is('other'))
            return view('pages.category.other', [
                'category' => [
                    'name' => 'Other',
                    'data' => Movie::all()->where('category_id', 6)->take(7),
                    'random' => Movie::all()->take(20)
                ],
            ]);
        return $this->categories();
    }

    public function category_view_all()
    {
        if (Str::contains(url()->current(), 'programmation/all'))
            return view('pages.category.programmation', [
                'category' => [
                    'name' => 'Programmation',
                    'data' => Movie::all()->where('category_id', 1),
                    'random' => Movie::all()->take(20)
                ],
            ]);
        else if (Str::contains(url()->current(), 'personnal_development/all'))
            return view('pages.category.personnal_dev', [
                'category' => [
                    'name' => 'Personnal development',
                    'data' => Movie::all()->where('category_id', 2),
                    'random' => Movie::all()->take(20)
                ],
            ]);
        else if (Str::contains(url()->current(), 'right/all'))
            return view('pages.category.right', [
                'category' => [
                    'name' => 'Right',
                    'data' => Movie::all()->where('category_id', 3),
                    'random' => Movie::all()->take(20)
                ],
            ]);
        else if (Str::contains(url()->current(), 'tech/all'))
            return view('pages.category.tech', [
                'category' => [
                    'name' => 'Tech',
                    'data' => Movie::all()->where('category_id', 4),
                    'random' => Movie::all()->take(20)
                ],
            ]);
        else if (Str::contains(url()->current(), 'oratorical_art/all'))
            return view('pages.category.oratorical_art', [
                'category' => [
                    'name' => 'Oratorical Art',
                    'data' => Movie::all()->where('category_id', 5),
                    'random' => Movie::all()->take(20)
                ],
            ]);
        else if (Str::contains(url()->current(), 'other/all'))
            return view('pages.category.other', [
                'category' => [
                    'name' => 'Other',
                    'data' => Movie::all()->where('category_id', 6),
                    'random' => Movie::all()->take(20)
                ],
            ]);
        return $this->categories();
    }

    public function playlists()
    {
        return view('pages.playlist.playlists', [
            'playlists' => Playlist::all()->sortBy('created_at'),
        ]);
    }

    public function playlist()
    {
        return view('pages.playlist.playlist', [
            'movies' => Playlists_movie::all()->where('user_id', Auth::user()->id),
        ]);
    }

    public function playlist_movies($request)
    {
        return view('pages.playlist.playlist_movies', [
            'movies' => Playlists_movie::all()->where('playlist_id', $request),
            'playlist' => Playlist::find($request),
        ]);
    }

    public function watch(Request $request)
    {
        $old_view = View::all()->where('user_id', Auth::user()->id)
        ->where('viewable_id', $request->movie_id)
            ->where('viewable_type', 'App\Models\Movie');
        if(count($old_view) == 0){
            $view = new View;
            $view->user_id = Auth::user()->id;
            $view->viewable_id = $request->movie_id;
            $view->viewable_type = 'App\Models\Movie';
            $view->save();
        }
        return view('pages.movie_watch', [
            'movie' => Movie::find($request->movie_id),
            'other' => Movie::all()->except(['movie_id', $request->movie_id])->take(5)
        ]);
    }
}
