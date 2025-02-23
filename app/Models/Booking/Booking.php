<?php

namespace App\Models\Booking;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    use HasFactory;

    protected $table = "bookings";

    protected $fillable = [
        'name',
        'email',
        'phone_number',
        'user_id',
        'event_name',
        'event_location',
        'status',
    ];

    public $timestamps = true;
}
