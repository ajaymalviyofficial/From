<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Candidate extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'email',
        'address',
        'full_address',
        'district',
        'state',
        'age',
        'marital_status',
        'qualification',
        'father_name',
        'mother_name',
        'job_experience',
    ];
}
