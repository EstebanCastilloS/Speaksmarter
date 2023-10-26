<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Level extends Model
{
    use HasFactory;

    protected $guarded = [];

    //un nvel puede tener muchas lecciones
    public function lessons(){
        return $this->hasMany(Lesson::class);
    }



}


