<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TrainingGroupLevel extends Model
{
    use HasFactory;

    protected $fillable = [
        'group_id',
        'name',
        'description'
    ];
}
