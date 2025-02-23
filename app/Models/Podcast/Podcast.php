<?php

namespace App\Models\Podcast;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Podcast extends Model
{
    use HasFactory;

    protected $table = "podcasts";

    protected $fillable = [
        'name',
        'image',
        'description',
        'audio',
    ];

    public $timestamps = true; 
}
