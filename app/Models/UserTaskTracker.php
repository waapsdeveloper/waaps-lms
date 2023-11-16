<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserTaskTracker extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'date',
        'clock',
        'timer_status'
    ];
}
