<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use \Dimsav\Translatable\Translatable;
    public $translationModel = 'App\Models\ProductTranslations';

    public $translatedAttributes = [
        'name', 'description',
    ];

    protected $fillable = [
        'code', 'parent_id', 'price', 'sale',
    ];
}



