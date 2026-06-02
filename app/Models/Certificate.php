<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Certificate extends Model
{
    use HasFactory;

    protected $fillable = [
        'student_name',
        'father_name',
        'certificate_number',
        'course_name',
        'session',
        'grade',
        'duration',
        'status',
        'issue_date',
        'student_photo',
        'certificate_pdf',
        'qr_code',
        'verification_slug',
    ];

    protected function casts(): array
    {
        return [
            'issue_date' => 'date',
        ];
    }
}
