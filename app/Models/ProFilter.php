<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ProFilter extends Model
{
    protected $fillable = [
        'filter_value', 'price', 'prod_id', 'sale',
    ];

}
