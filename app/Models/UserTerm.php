<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserTerm extends Model
{
    use HasFactory;
    protected $fillable = [
        'user_id',
        'term_link',
        'is_accepted'
    ];
}
