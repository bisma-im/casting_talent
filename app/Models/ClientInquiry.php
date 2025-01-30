<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ClientInquiry extends Model
{
    use HasFactory;

    protected $table = 'client_inquiry'; // Specify your table name here

    protected $fillable = [
        'first_name',
        'last_name',
        'company',
        'calling_number',
        'whatsapp_number',
        'email',
        'project',
        'country',
        'state',
        'city',
        'no_of_days',
        'no_of_hours',
        'start_date',
        'end_date',
        'no_of_talents_male',
        'no_of_talents_female',
        'nationalities',
        'categories',
        'starting_amount',
        'maximum_amount',
        'project_detail',
        'brief_file'
    ];

    protected $casts = [
        'start_date' => 'datetime',
        'end_date' => 'datetime',
    ];    
}
