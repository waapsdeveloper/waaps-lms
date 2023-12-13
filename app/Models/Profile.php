<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    use HasFactory;
    protected $fillable = [
        'user_id',
        'cv_link',
        'nic',
        'phone',
        'address',
        'qualification',
        'points',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
