<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class PopularSong extends Model
{
    use HasFactory;
    protected $table = 'songs';
    protected $primary = 'id';
    protected $fillable = ['name','title','photo'];

    public function playlists()
    {
        return $this->belongsToMany(Playlist::class, 'playlist_song', 'song_id', 'playlist_id');
    }
}
