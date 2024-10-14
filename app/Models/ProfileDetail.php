<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProfileDetail extends Model
{
    use HasFactory;
    protected $fillable = [
        'first_name',
        'last_name',
        'whatsapp_number',
        'email',
        'no_of_days',
        'no_of_hours',
        'no_of_talents_male',
        'no_of_talents_female',
        'required_talent',
        'nationalities',
        'starting_amount',
        'maximum_amount',
        'project_detail',
        'profile_image',
    ];
}
