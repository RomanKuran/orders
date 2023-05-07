<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    protected $fillable = [
        'status',
        'user_id',
        'service_id'
    ];

    public static $statuses = ['created', 'inProgress', 'done'];

    public static function createOrder($status, $userId, $serviceId)
    {
        return Order::create([
            'status' => $status,
            'user_id' => $userId,
            'service_id' => $serviceId
        ]);
    }
}