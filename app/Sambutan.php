<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use illuminate\Support\Str;

class Sambutan extends Model
{
    protected $table = 'table_sambutan';
    protected $guarded = ['id'];
}