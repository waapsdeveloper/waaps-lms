<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserTaskNote extends Model
{
    use HasFactory;
    protected $fillable = [
        'user_id',
        'task_id',
        'link'
    ];
}
