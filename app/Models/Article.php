<?php

use Cviebrock\EloquentSluggable\Sluggable;
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    //
    protected $table = 'articles';


    protected $fillable = ['title', 'content', 'slug', 'category_id', 'user_id'];

    use Sluggable;

    /**
     * Return the sluggable configuration array for this model.
     *
     * @return array
     */
    public function sluggable()
    {
        return [
            'slug' => [
                'source' => 'title'
            ]
        ];
    }

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
