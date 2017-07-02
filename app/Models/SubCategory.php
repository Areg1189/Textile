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

    public function category(){
        return $this->belongsTo('App\Models\Category', 'category_id', 'id');
    }
    public function filters(){
        return $this->hasMany('App\Models\CatFilter', 'cat_id', 'id');
    }
}