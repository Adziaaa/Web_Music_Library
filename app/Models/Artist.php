<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Artist extends Model
{
    public function albums()
{
    return $this->hasMany(Albums::class);
}

public function songs()
{
    return $this->hasMany(Songs::class);
}

}
