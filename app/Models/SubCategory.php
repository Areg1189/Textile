<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SubCategory extends Model
{
    use \Dimsav\Translatable\Translatable;
    public $translationModel = 'App\Models\SubCategoryTranslations';

    public $translatedAttributes = [
        'name',
    ];

    protected $fillable = [
        'code', 'link', 'image_name', 'category_id', 'top',
    ];
}
