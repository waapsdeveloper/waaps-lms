<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserTaskSubmission extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'task_id',
        'instructor_id',
        'instructor_remarks',
        'percentage_completed'
    ];
}
