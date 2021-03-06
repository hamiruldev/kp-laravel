<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Subscription extends Model
{
    use HasFactory;
    protected $fillable = [
        'user_id',
        'last_payment_id',
        'expire_at'
    ];

    protected $casts = [
        'expire_at' => 'datetime'
    ];

}
