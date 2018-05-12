<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    //
    protected $table = 'articles';


    protected $fillable = ['title', 'content', 'category_id', 'user_id'];


    // Un articulo, solo a una categoria
    public function category(){
    	return $this->belongsTo('App\Models\Category');
    }

    // Un articulo, solo un usuaurio
    public function user(){
    	return $this->belongsTo('App\User');
    }

    // Un imagen, solo un articulo
    public function images(){
    	return $this->hasMany('App\Models\Image');
    }

    // Relacion demuchos a muchos con tags
    public function tags(){
    	return $this->belongsToMany('App\Models\Tag');	
    } 
}
