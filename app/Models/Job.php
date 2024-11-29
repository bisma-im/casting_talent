<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Job extends Model
{
    use HasFactory;

    // The table associated with the model
    protected $table = 'jobs';

    // The attributes that are mass assignable
    protected $fillable = [
        'project',
        'required',
        'date',
        'timings',
        'days',
        'payment',
        'payment_status',
        'country',
        'city',
        'area',
        'transportation',
        'food',
        'payment_mode',
        'paid_status',
    ];

    // If you have any custom timestamps, you can disable default timestamp handling
    public $timestamps = true;

    // If you're using custom date formats (for example, to ensure dates are in Y-m-d format)
    protected $dates = ['date'];
}
