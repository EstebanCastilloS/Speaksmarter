<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    protected  $guarded = [];

    //una categoria puede tener muchas lecciones
    public function lessons(){
        return $this->belongsToMany(Lesson::class);
    }
}
