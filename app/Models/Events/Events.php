<?php

namespace App\Models\Events;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Events extends Model
{
    use HasFactory;

    protected $table = "events";

    protected $fillable = [
        'name',
        'image',
        'date',
        'time',
        'location',
        'contact',
        'host',
        'event_id',
    ];
}
