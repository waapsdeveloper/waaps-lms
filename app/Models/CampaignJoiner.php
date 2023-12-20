<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CampaignJoiner extends Model
{
    use HasFactory;
    protected $fillable = [
        'campaign_id',
        'user_id',
        'joined_at ',
        'status'
    ];
}
