<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <style>
        body { font-family: Inter, Arial, sans-serif; color: #111; background: #f5f5f5; margin: 0; padding: 0; }
        .wrapper { max-width: 600px; margin: 30px auto; background: #fff; border-radius: 10px; overflow: hidden; box-shadow: 0 2px 8px rgba(0,0,0,0.08); }
        .header { background: #1a1a2e; color: #fff; padding: 28px 32px; }
        .header h2 { margin: 0; font-size: 22px; }
        .header p { margin: 6px 0 0; font-size: 13px; opacity: 0.75; }
        .body { padding: 28px 32px; }
        .body p { margin: 0 0 14px; line-height: 1.6; }
        .detail-table { width: 100%; border-collapse: collapse; margin: 20px 0; }
        .detail-table td { padding: 9px 12px; border-bottom: 1px solid #eee; font-size: 14px; }
        .detail-table td:first-child { color: #555; width: 40%; }
        .footer { background: #f9f9f9; padding: 18px 32px; font-size: 12px; color: #888; border-top: 1px solid #eee; }
    </style>
</head>
<body>
<div class="wrapper">
    <div class="header">
        <h2>THE NIACE</h2>
        <p>Application Confirmation</p>
    </div>
    <div class="body">
        <p>Dear <strong>{{ $application->student_name }}</strong>,</p>
        <p>Thank you for applying to <strong>THE NIACE</strong>. We have successfully received your application. Our team will review it and get in touch with you shortly.</p>

        <table class="detail-table">
            <tr>
                <td>Student Name</td>
                <td>{{ $application->student_name }}</td>
            </tr>
            @if($application->mobile)
            <tr>
                <td>Mobile</td>
                <td>{{ $application->mobile }}</td>
            </tr>
            @endif
            @if($application->education_level)
            <tr>
                <td>Education Level</td>
                <td>{{ $application->education_level }}</td>
            </tr>
            @endif
            @if($application->graduation_percentage)
            <tr>
                <td>Graduation %</td>
                <td>{{ $application->graduation_percentage }}</td>
            </tr>
            @endif
            <tr>
                <td>Submitted On</td>
                <td>{{ $application->created_at->format('d M, Y • h:i A') }}</td>
            </tr>
        </table>

        <p>If you have any questions, feel free to reach us at <a href="mailto:customercare.thenaice@gmail.com">customercare.thenaice@gmail.com</a>.</p>
        <p>We look forward to connecting with you!</p>
    </div>
    <div class="footer">
        &copy; {{ date('Y') }} THE NIACE. All rights reserved.
    </div>
</div>
</body>
</html>
