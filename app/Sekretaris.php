<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use illuminate\Support\Str;

class Sekretaris extends Model
{
    protected $table = 'table_sk_sekretaris';
    protected $guarded = ['id'];
}