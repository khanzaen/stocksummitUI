<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Registration extends Model
{
    protected $fillable = [
        'team_name',
        'track',
        'university',
        'leader_name',
        'leader_npm',
        'leader_email',
        'leader_whatsapp',
        'leader_ktm',
        'member1_name',
        'member1_npm',
        'member1_email',
        'member1_ktm',
        'member2_name',
        'member2_npm',
        'member2_email',
        'member2_ktm',
        'proof_payment',
        'proof_follow',
        'status',
    ];
}
