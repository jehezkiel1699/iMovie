<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Movie extends Model
{
    protected $fillable = [
        'name', 'image', 'deskripsi', 'durasi', 'teater'
    ];
    public function comments(){
        return $this->hasMany('App\Comment', 'movie_id');
    }
    public function user()
    {
    	return $this->belogsTo('App\User');
    }
}
