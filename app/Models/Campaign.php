<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Campaign extends Model
{
    use HasFactory;
    protected $fillable = [
        'user_id',
        'project_id',
        'title',
        'description',
        'type',
        'image',
        'status',
        'capacity',
        'start_time',
        'end_time',
        'budget',
    ];
}
