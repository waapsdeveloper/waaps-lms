<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserTaskTrackerTime extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_task_tracker_id',
        'record_time',
        'record_time_difference'

    ];
}
