<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CatFilter extends Model
{
    protected $fillable = [
        'cat_id', 'filter_id',
    ];

    public function filter(){
        return $this->belongsTo('App\Models\FilterCategory', 'filter_id', 'id');
    }

    public function cat(){
        return $this->belongsTo('App\Models\SubCategory', 'cat_id', 'id');
    }
}
