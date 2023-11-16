<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Result extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'instructor_id',
        'training_id',
        'title',
        'description',
        'task_percentage',
        'test_percentage',
        'average_percentage',
        'remarks'
    ];
}
