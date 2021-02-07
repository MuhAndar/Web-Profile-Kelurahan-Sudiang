<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use illuminate\Support\Str;

class Categories extends Model
{
    protected $table = 'table_categories';
    protected $guarded = ['id'];

    function setSlugAttribute($value)
    {
        $this->attributes['slug'] = str::slug($value, '-');
    }

    public function getRouteKeyName()
    {
        return 'slug';
    }

    public function Articles()
    {
        return $this->hasMany(App\Articles::class, 'categories_id', 'id');
    }
}