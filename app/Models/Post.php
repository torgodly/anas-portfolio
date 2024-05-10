<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    protected $fillable = [
        'type',
        'title',
        'excerpt',
        'content',
        'image',
        'link',
    ];

    //excerpt
//    public function getExcerptAttribute()
//    {
//        return substr($this->content, 0, 200);
//    }

}
