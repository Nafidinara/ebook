<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent;

/**
 * Class Author
 * @package App
 * @mixin Eloquent;
 */

class Author extends Model
{
    protected $table = 'authors';
    protected $fillable = [
        'name',
        'date_of_birth',
        'place_of_birth',
        'gender',
        'email',
        'hp'
    ];
}
