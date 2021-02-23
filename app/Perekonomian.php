<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use illuminate\Support\Str;

class Perekonomian extends Model
{
    protected $table = 'table_ksperekonomian';
    protected $guarded = ['id'];
}