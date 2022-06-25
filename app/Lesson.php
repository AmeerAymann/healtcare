<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Lesson extends Model
{
    //students

    protected $fillable = [
        'title', 'start', 'end', 'students', 'user_id', 'description'
    ];
    protected $casts = [
        'students' => 'array'
    ];
}
