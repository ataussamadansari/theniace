<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class StoreCertificateRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'student_name' => ['required', 'string', 'max:255'],
            'father_name' => ['required', 'string', 'max:255'],
            'certificate_number' => ['required', 'string', 'max:100', 'unique:certificates,certificate_number'],
            'course_name' => ['required', 'string', 'max:255'],
            'session' => ['required', 'string', 'max:100'],
            'grade' => ['required', 'string', 'max:50'],
            'duration' => ['required', 'string', 'max:100'],
            'status' => ['required', 'in:Verified,Pending,Rejected'],
            'issue_date' => ['required', 'date'],
            'student_photo' => ['nullable', 'image', 'mimes:jpg,jpeg,png,webp', 'max:2048'],
            'certificate_pdf' => ['nullable', 'file', 'mimes:pdf', 'max:5120'],
        ];
    }
}
