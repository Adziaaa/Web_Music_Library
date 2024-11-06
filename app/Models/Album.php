<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Album extends Model
{
    public function artist() 
        {
        return $this->belongsTo(User::class, 'artist_id');
        }
    
        public function songs() 
            {
            return $this->hasMany(Songs::class);
        }
    
    
}
