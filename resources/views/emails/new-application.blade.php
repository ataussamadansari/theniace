<div style="font-family:Inter, sans-serif; color:#111;">
    <h3>New Application Submitted</h3>

    <p><strong>Student:</strong> {{ $application->student_name }}</p>
    <p><strong>Age:</strong> {{ $application->age }}</p>
    <p><strong>Education:</strong> {{ $application->education_level }}</p>
    <p><strong>Graduation %:</strong> {{ $application->graduation_percentage }}</p>
    <p><strong>Father:</strong> {{ $application->father_name }}</p>
    <p><strong>Mother:</strong> {{ $application->mother_name }}</p>
    <p><strong>DOB:</strong> {{ optional($application->dob)->toDateString() }}</p>
    <p><strong>Mobile:</strong> {{ $application->mobile }}</p>
    <p><strong>Aadhar/ID:</strong> {{ $application->aadhar_no }}</p>
    <p><strong>Address:</strong><br>{{ nl2br(e($application->address)) }}</p>

    <p>View all applications in the admin panel.</p>
</div>
