<?php

namespace Database\Seeders;

use App\Models\Certificate;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\URL;

class CertificateSeeder extends Seeder
{
    public function run(): void
    {
        $items = [
            [
                'student_name' => 'Ayesha Khan',
                'father_name' => 'Rashid Khan',
                'certificate_number' => 'NIACE-UG-24001',
                'course_name' => 'BCA',
                'session' => '2021-2024',
                'grade' => 'A',
                'duration' => '3 Years',
                'status' => 'Verified',
                'issue_date' => now()->subMonths(5)->toDateString(),
            ],
            [
                'student_name' => 'Rahul Sharma',
                'father_name' => 'Mohan Sharma',
                'certificate_number' => 'NIACE-PG-24011',
                'course_name' => 'MBA',
                'session' => '2022-2024',
                'grade' => 'A+',
                'duration' => '2 Years',
                'status' => 'Verified',
                'issue_date' => now()->subMonths(2)->toDateString(),
            ],
        ];

        foreach ($items as $item) {
            Certificate::query()->updateOrCreate(
                ['certificate_number' => $item['certificate_number']],
                array_merge($item, [
                    'qr_code' => URL::to('/certificate-verification?certificate_number='.$item['certificate_number']),
                ])
            );
        }
    }
}
