<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ValueField extends Model
{
    protected $fillable = [
        'product_id',
        'field_id',
        'value'
    ];
}
