<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TaskQuery extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'instructor_id',
        'title',
        'description',
        'instructor_reply',
        'solution_link'
    ];
}
