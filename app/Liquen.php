<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Liquen extends Model
{
    protected $fillable = [
        'name', 'img', 'content',
    ];
}
