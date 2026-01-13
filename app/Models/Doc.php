<?php

namespace App\Models;


use MongoDB\Laravel\Eloquent\Model;

class Doc extends Model
{
    protected $connection = 'mongodb';

    protected $fillable = [
        'title',
    ];
}
