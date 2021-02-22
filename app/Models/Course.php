<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    use HasFactory;
     /* hacemos nuestra relacion de donde un curso pertenece a un usuario */
    public function user(){
        return $this->belongsTo(User::class);

    }
    /* creamos campos virtuales */
    public function getExcerptAttribute()
    {
        return substr($this->description, 0, 80) . "...";

    }
}
