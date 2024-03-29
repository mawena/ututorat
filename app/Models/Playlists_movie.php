<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Playlists_movie extends Model
{
    use HasFactory;

    protected $fillable = [
        'playlist_id',
        'movie_id'
    ];

    public function movie(){
        return $this->belongsTo(Movie::class);
    }

}
