<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserInstructorSession extends Model
{
    use HasFactory;

    protected $fillable = [
        'instructor_id',
        'user_id',
        'session_type',
        'duration',
        'instructor_remarks',
        'percentage'
    ];
}
