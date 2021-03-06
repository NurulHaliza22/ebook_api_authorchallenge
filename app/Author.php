<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Author extends Model
{
    protected $fillable = [
        'name',
        'date_of_birth',
        'place_of_birth',
        'gender',
        'email',
        'hp'
    ];

    protected $table = "authors";
}
