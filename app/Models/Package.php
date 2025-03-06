<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Package extends Model
{
    use HasFactory;

    // Define the table name in case it doesn't follow the default plural convention
    protected $table = 'packages';

    // If you want to define the fields that are mass-assignable
    protected $fillable = [
        'name',
        'description',
        'price',
        'destination',
        'duration',
        'image',
        'is_active',
    ];

    // If you want to specify any fields that should be cast to a particular type
    protected $casts = [
        'price' => 'decimal:2',
        'is_active' => 'boolean',
        'created_at' => 'datetime',
        'updated_at' => 'datetime',
    ];
}
