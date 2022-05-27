<?php

use App\Http\Controllers\CommentController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FileController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\MainController;
use App\Http\Controllers\MovieController;
use App\Http\Controllers\PlaylistController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [MainController::class, 'home'])->name('homepage');

Route::prefix('categories')->group(function () {

    Route::get('/', [MainController::class, 'categories'])->name('categories');

    Route::get('/tech', [MainController::class, 'category'])->name('tech');

    Route::get('/programmation', [MainController::class, 'category'])->name('programmation');

    Route::get('/personnal_development', [MainController::class, 'category'])->name('personnal_development');

    Route::get('/other', [MainController::class, 'category'])->name('other');

    Route::get('/right', [MainController::class, 'category'])->name('right');

    Route::get('/oratorical_art', [MainController::class, 'category'])->name('oratorical_art');

    Route::get('{category_name}/all', [MainController::class, 'category_view_all'])->name('category_view_all');

});

Route::get('/playlists', [MainController::class, 'playlists'])->name('playlists');

Route::middleware('auth')->get('/playlist/{playlist_id}', [MainController::class,'playlist'])->name('playlist');

Route::get('/playlist/{playlist_id}/movies', [MainController::class,'playlist_movies'])->name('playlist_movies');



Route::prefix('account')->group(function(){

    Route::get('login', function(){
        return view('pages.signs.login');
    })->name('account/login');

    Route::get('register', function(){
        return view('pages.signs.register');
    })->name('account/register');

    Route::get('forgot_password', function(){
        return view('pages.signs.forgot');
    })->name('account/forgot');

    Route::get('account_upgrade', function(){
        return view('pages.signs.account_upgrade');
    })->name('account/account_upgrade');

});

Route::middleware('auth')->group(function(){
    Route::post('comment.create/{id}',[CommentController::class, 'store'])->name('comment.store');
});

Route::middleware('auth')->get('account_upgrade', [MainController::class, 'account_upgrade'])->name('account_upgrade');

Route::middleware('auth')->get('watch/{movie_id}',[MainController::class, 'watch'])->name('watch');

Route::middleware('tutor')->prefix('tutor_dashboard')->group(function(){

    Route::get('/', function(){
        return view('pages.tutors_pages.activities');
    })->name('activities');

    Route::get('/movies', function(){
        return view('pages.tutors_pages.movies');
    })->name('movies');

    Route::get('/playlists', function(){
        return view('pages.tutors_pages.playlists');
    })->name('tutor_playlists');

    Route::get('/teach_the_world', function(){
        return view('pages.tutors_pages.teach_the_world');
    })->name('teach_the_world');

});

Route::middleware('auth')->post('comment.create/{movie_id}',[CommentController::class, 'store'])->name('comment.store');

Route::resource('File',FileController::class);

Route::resource('Movie',MovieController::class);

Route::resource('Playlist',PlaylistController::class);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
