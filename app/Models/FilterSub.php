<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class FilterSub extends Model
{
    use \Dimsav\Translatable\Translatable;

    public $translationModel = 'App\Models\FilterSubTranslations';

    public $translatedAttributes = [
        'name',
    ];

    protected $fillable = [
        'code', 'filter_id',
    ];

    public function values(){
        return $this->hasMany('App\Models\FilterValue', 'parent_id', 'id');
    }
}
