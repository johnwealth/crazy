<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
 

   public function author(){

        return $this->belongsTo(User::class, 'author_id');
    }


    public function category(){

    	return $this->belongsTo('App\Category');
    }


    public function tags(){

    	return $this->belongsToMany('App\Tag');
    }


    public function comments(){

    	return $this->hasMany('App\Comment');
    }

    public static function findBySlug($slug){

    	return Static::where('slug','=', $slug)->firstOrFail();
    }
}
