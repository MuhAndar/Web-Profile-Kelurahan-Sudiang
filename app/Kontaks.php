<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use illuminate\Support\Str;

class Kontaks extends Model
{
    protected $table = 'table_kontaks';
    protected $guarded = ['id'];
}