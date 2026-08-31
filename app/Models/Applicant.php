<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Applicant extends Model
{
    protected $fillable = [
        'full_name',
        'npm',
        'faculty',
        'study_program',
        'email',
        'whatsapp',
        'siak_ng_screenshot',
        'cv',
        'instagram_follow',
        'share_broadcast',
        'first_choice_division',
        'first_choice_reason',
        'second_choice_division',
        'second_choice_reason',
        'portfolio',
        'status',
    ];

    protected $casts = [
        'share_broadcast' => 'array',
    ];
}
