<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use illuminate\Support\Str;
use App\Categories;

class Articles extends Model
{
    protected $table = 'table_articles';
    protected $guarded = ['id'];

    public function Categories()
    {
        return $this->belongsTo(Categories::class , 'categories_id', 'id');
    }
}