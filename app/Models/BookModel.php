<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class BookModel extends Model
{
    protected $fillable = [
        'id',
        'title',
        'author',
        'score',
        'status',
        'summary',
        'cover'
    ];

    protected $dates = ['created_at', 'updated_at'];

    //define um valor padrão para Status
    protected $attributes = ['status' => 'reading'];
}
