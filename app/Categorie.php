<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Categorie extends Model
{
    protected $fillable = ['name'];

    public function fields()
    {
        return $this->hasMany('App\CategorieField');
    }
    public function products()
    {
        return $this->hasMany('App\Product');
    }
}
