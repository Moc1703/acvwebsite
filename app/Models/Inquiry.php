<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Inquiry extends Model
{
    protected $fillable = [
        'name',
        'email',
        'phone',
        'company',
        'message',
        'service_interest',
        'user_type',
        'status',
    ];

    protected $attributes = [
        'status' => 'new',
    ];
}
