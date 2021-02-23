<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use illuminate\Support\Str;

class Pemerintahan extends Model
{
    protected $table = 'table_kspemerintahan';
    protected $guarded = ['id'];
}