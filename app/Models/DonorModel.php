<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DonorModel extends Model
{
    use HasFactory;

    protected $table = 'donors';
    
    protected $fillable = [
        'name',
        'email',
        'phone',
        'city',
        'location',
        'address',
        'blood_group',
        'gender',
        'religion',
        'profession',
        'total_donat',
        'image',
        'dob',
        'last_donat',
        'about',
        'fb',
        'tw',
        'in',
    ];
}
