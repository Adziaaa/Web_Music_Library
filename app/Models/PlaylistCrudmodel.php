<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class PlaylistCrudmodel extends Model
{
    use HasFactory;
    protected $table = "crud";
    protected $primaryKey = "name";
    protected $fillable = [
        'name',
        'title',
        'duration',
        'genre',
    ];
    

   
}
