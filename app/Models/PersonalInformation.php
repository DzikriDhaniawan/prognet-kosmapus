<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PersonalInformation extends Model
{
    use HasFactory;

    protected $fillable = [
        'full_name',
        'gender',
        'birth_date',
        'job',
        'institution',
        'city',
        'status',
        'education',
        'emergency_contact',
    ];
}
