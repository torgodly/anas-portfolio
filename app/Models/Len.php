<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Len extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'link',
        'category',
        'cover_image',
        'code_image',
    ];
}
