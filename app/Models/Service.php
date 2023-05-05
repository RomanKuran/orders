<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    use HasFactory;

    protected $hidden = [
        'name',
        'price',
    ];

    public static function edit($serviceId, $fieldName, $value)
    {
        return Service::where('id', $serviceId)->update([
            $fieldName => $value,
        ]);
    }
}
