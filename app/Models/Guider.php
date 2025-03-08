<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Guider extends Model
{
    use HasFactory;

    protected $table = 'guiders';

    protected $fillable = [
        'user_id',
        'name',
        'email',
        'image',
        'phone',
        'bio',
        'is_active',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function getStatusLabelAttribute()
    {
        return ucfirst($this->is_active == 1 ? 'Active' : 'Inactive');
    }
}
