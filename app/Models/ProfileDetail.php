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
        'profile_image',
    ];
}
