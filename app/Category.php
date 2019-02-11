<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    //variable que guarda la tabla donde quiero extraer datos
    protected $table = "categories";
    //dato que quiero extraer
    protected $fillable = ['name'];

    public function article() 
    
    {

        return $this->hasMany('App\Article');
    }
}
