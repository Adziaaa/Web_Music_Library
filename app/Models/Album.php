<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

use Illuminate\Database\Eloquent\Factories\HasFactory;

class Album extends Model
{
    use HasFactory;

    // Specify the table name if it doesn't follow the convention (optional)
    protected $table = 'albums';

    // Define which attributes are mass assignable
    protected $fillable = [
        'id',
        'title',
        'artist',
        'albumTime',
        'nrSongs',
        'image'
    ];
}