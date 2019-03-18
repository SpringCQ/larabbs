<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    //分类
    protected $fillable = [ //白名单
        'name', 'description',
    ];
}
