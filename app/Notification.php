<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

class Notification extends Model
{
    protected  $guarded = [];
    protected $casts = [
        'data' => 'array',
    ];
}
