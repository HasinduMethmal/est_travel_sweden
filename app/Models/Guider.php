<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Guider extends Model
{
    use HasFactory;

    // Table name (optional if it matches the plural form of the model)
    protected $table = 'guiders';

    // Mass assignable attributes
    protected $fillable = [
        'user_id',
        'name',
        'email',
        'status',
    ];

    // Define relationship to User (if applicable)
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    // Additional helper methods if required
    public function getStatusLabelAttribute()
    {
        return ucfirst($this->status);
    }
}
