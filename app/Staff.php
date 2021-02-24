<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use illuminate\Support\Str;

class Staff extends Model
{
    protected $table = 'table_staff';
    protected $guarded = ['id'];
}