<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Book
 * @package App
 */

class Book extends Model
{
    protected $table = 'books';
    protected $fillable = [
        'title','description','author','publisher','date_of_issue'
    ];
}
