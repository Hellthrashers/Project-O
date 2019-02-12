<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;

class Article extends Model
{
    //tabla de articulos iniciada
    protected $table="articles";
    //campos a extraer de la tabla articles
    protected $fillable=['title','content','user_id','category_id'];

    use Sluggable;

	public function sluggable()
    {
        return [
            'slug' => [
                'source' => 'title'
            ]
        ];
    }

    //funciones para realizar las relaciones uno a muchos
    public function category() 
    
    {
        return $this->belongsTo('App\Category');
    }

    public function user()

    {
        return $this->belongsTo('App\User');
    }

    public function image()

    {
        return $this->hasMany('App\Image');
    }

    public function tags()
    
    {
        return $this->belongsToMany('App\Tag');
    }
}
