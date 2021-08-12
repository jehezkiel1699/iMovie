<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    // //
    // public function movies(){
    //     return $this->hasOne('App\Movie');
    // }
    // public function users(){
    //     return $this->belongsToMany('App\User');
    // } 

    // public function hasAnyMovie($movie){
    //     return null !== $this->movie()->where('name', $movie)->first();
    // }

    // public function hasAnyUser($user){
    //     return null !== $this->user()->where('name', $user)->first();
    // }
    
    // public function movie()
    // {
    //     return $this->morphTo();
    // }
    public function user()
    {
        return $this->belongsTo('App\User');
    }

    protected $fillable = [
        'user_id', 'movie_id', 'komentar',
    ];
}
