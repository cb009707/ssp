<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    use HasFactory;
    protected $fillable = [
        'user_id',
        'full_name',
        'nic',
        'phone_number',
        'type',
        'payment',
        'card_No',
        'sec_No',
        'service',
        'address',
        'plate',
        'chasis',
        'discount',
    ];
}
