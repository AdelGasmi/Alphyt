<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CategorieField extends Model
{
    protected $fillable = [
        'name',
        'categorie_id'
    ];
}
