<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = [
        'title',
        'img',
        'categorie_id'
    ];

    public function categorie()
    {
        return $this->belongsTo('App\Categorie','categorie_id','id');
    }

    public function values()
    {
        return $this->hasMany('App\ValueField');
    }

    public function images()
    {
        return $this->hasMany('App\Image');
    }
}
