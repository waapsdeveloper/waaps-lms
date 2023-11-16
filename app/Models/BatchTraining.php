<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BatchTraining extends Model
{
    use HasFactory;

    protected $fillable = [
        'batch_id',
        'training_id'
    ];
}
