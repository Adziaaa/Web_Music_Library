<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Playlist extends Model
{
    protected $table = "playlists";
    protected $fillable = [
        'name',
        'duration',
        'genre',
    ];
    
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function songs()
    {
        return $this->belongsToMany(PopularSong::class, 'playlist_song', 'playlist_id', 'song_id');
    }
}

