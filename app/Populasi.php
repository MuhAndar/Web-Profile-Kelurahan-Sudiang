<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use illuminate\Support\Str;

class Populasi extends Model
{
    protected $table = 'table_home_populasis';
    protected $guarded = ['id'];
}