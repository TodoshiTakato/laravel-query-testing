<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $fillable = [
        'name',
    ];

    public static function parent_categories() {
        return static::where('parent_id', null)->get();
    }

    public function parent_category() {
        return $this->hasOne('App\Category');
    }
    public function child_category() {
        return $this->belongsTo('App\Category');
    }

    public function products() {
        return $this->hasMany('App\Product');
    }

}
