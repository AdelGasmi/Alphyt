<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = [
        'title',
        'price',
        'description',
        'img',
        'categorie_id'
    ];

    public function categorie()
    {
        return $this->belongsTo('App\Categorie','categorie_id','id');
    }
}
