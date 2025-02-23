<?php

namespace App\Models\Blog;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Blogs extends Model
{
    use HasFactory;

    protected $table = "blogs";

    protected $fillable = [
        'title',
        'image',
        'description',
        'blog_display',
        'date',
        'blog_id',
    ];

    public $timestamps = true;
}
