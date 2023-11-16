<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TrainingGroupLevelTask extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'training_group_level_id',
        'task_id'
    ];
}
