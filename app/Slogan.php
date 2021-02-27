<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use illuminate\Support\Str;

class Slogan extends Model
{
    protected $table = 'table_home_slogan';
    protected $guarded = ['id'];
}