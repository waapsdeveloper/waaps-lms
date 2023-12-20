<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CampaignCertification extends Model
{
    use HasFactory;
    protected $fillable = [
        'campaign_id',
        'user_id',
        'result_id',
        'certificate_id'
    ];
}
