<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Lesson extends Model
{
    use HasFactory;

    protected $guarded = [];

    //una leccion puede tener muchas categorias
    public function categories(){
        return $this->belongsToMany(Category::class);
    }

    //contiene la llave foranea la lession
    public function level(){
        return $this->belongsTo(Level::class);
    }
}
