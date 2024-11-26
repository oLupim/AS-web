<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Livro extends Model
{
    protected $fillable = [
        'title',
        'author',
        'year',
        'gender'
    ];
}
