<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Destination extends Model
{
    use HasFactory;

   protected $table = 'destinations';

    protected $fillable = [
        'name',
        'description',
        'location',
        'price',
        'image',
        'is_active'
    ];

    public function getPriceAttribute($value)
    {
        return number_format($value, 2);  
    }

    public function getImageUrlAttribute()
    {
        return $this->image ? asset('storage/' . $this->image) : null;
    }
}
