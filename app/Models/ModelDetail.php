<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ModelDetail extends Model
{
    use HasFactory;

    protected $table = 'model_details';

    protected $fillable = [
        'first_name', 'last_name', 'date_of_birth', 'gender', 'nationality',
        'calling_number', 'whatsapp_number', 'marital_status', 'ethnicity', 
        'location', 'biography', 'languages_spoken', 'driving_license', 'email', 
        'instagram_username', 'height', 'bust', 'waist', 'hip', 'weight', 
        'eye_color', 'hair_color', 'hair_length', 'shoe_size', 'dress_size', 
        'hourly_rate', 'session_rate', 'category', 'musician_categories', 
        'profile_images', 'have_tattoos', 'profile', 'visa_status', 'talent_id'
    ];
}
