<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    //
    protected $table = 'categories';


    protected $fillable = ['name'];


    // Establecer relacion, uno a muchos
    // se recomiendo el nombre d ela tabla a relacionar de manera plural
    public function articles(){
    	return $this->hasMany('App\Models\Article');
    }




}
