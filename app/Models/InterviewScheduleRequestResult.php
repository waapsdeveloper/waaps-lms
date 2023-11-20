<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class InterviewScheduleRequestResult extends Model
{
    use HasFactory;

    protected $fillable = [
        'interview_schedule_request_id',
        'description',
        'joining_date',
        'status'

    ];
}
