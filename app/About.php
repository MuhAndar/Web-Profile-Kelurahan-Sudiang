<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use illuminate\Support\Str;

class About extends Model
{
    protected $table = 'table_home_about';
    protected $guarded = ['id'];
}