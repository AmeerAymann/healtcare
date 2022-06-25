<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Subscription extends Model
{
    protected $guarded = [];


    protected $casts = [
        'day_lesson' => 'array'
    ];
}
