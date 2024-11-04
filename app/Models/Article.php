<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    // Specify the fillable fields to allow mass assignment
    protected $fillable = [
        'title',
        'content',
    ];
}