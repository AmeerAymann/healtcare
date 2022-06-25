<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    protected $fillable = [
        'name_ko', 'name_en', 'skype_id', 'zoom_url', 'phone', 'photo', 'user_id',
        'major', 'country', 'youtube_link', 'tags', 'introduction'
    ];



    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
