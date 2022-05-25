<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Movie extends Model
{
    use HasFactory;

    public function user(){
        return $this->belongsTo(User::class);
    }

    public function category(){
        return $this->belongsTo(Category::class);
    }

    public function views(){
        return $this->morphMany(View::class, "viewable");
    }

    public function likes(){
        return $this->morphMany(Like::class, "likeable");
    }

    public function comments(){
        return $this->morphMany(Comment::class , "commentable");
    }

    public function playlist(){
        return $this->belongsTo(Playlist::class);
    }


}
