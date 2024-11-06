<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Song extends Model
{
    public function artist()
{
    return $this->belongsTo(Artist::class);
}

public function albums()
{
    return $this->belongsTo(Albums::class);
}

public function playlist()
{
    return $this->belongsToMany(Playlist::class);
}

}
