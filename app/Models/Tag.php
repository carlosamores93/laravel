<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    //
    protected $table = 'tags';


    protected $fillable = ['name'];


    // Relacion demuchos a muchos con articulos
    public function articles(){
    	return $this->belongsToMany('App\Models\Article')->withTimestamps();	
    }
}
