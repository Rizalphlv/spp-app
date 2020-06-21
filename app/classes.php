<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class classes extends Model
{
    protected $table = "class";
    protected $fillable = ['id','class_name','major'];
}
