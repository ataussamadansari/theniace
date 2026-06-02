<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Application extends Model
{
    use HasFactory;

    protected $fillable = [
        'student_name',
        'email',
        'course_interest',
        'age',
        'education_level',
        'graduation_percentage',
        'father_name',
        'mother_name',
        'address',
        'dob',
        'mobile',
        'aadhar_no',
    ];

    protected function casts(): array
    {
        return [
            'dob' => 'date',
        ];
    }
}
