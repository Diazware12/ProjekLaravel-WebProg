<?php

namespace App;


use Illuminate\Database\Eloquent\Model;
use Auth;


class Movie extends Model
{

    protected $fillable = [
        'title', 'genre_id', 'description','rating','picture'
    ];

    protected $appends = ['isSaved'];

    public function user(){
        return $this->belongsTo(User::class);
    }

    public function genre(){
        // dump($this->belongsTo(Genre::class));
        return $this->belongsTo(Genre::class);
    }

    public function saves(){
        return $this->hasMany(save::class);
    }

    public function comment(){
        return $this->hasMany(Comments::class);
    }

    public function getIsSavedAttribute()
    {
        if(Auth::check())
        {
            return $this->saves()->where('user_id', Auth::id())->value('id');
        }
        return null;
    }
}
