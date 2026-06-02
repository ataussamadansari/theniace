@extends('admin.layout')

@section('title', 'Application Details | THE NIACE Admin')

@section('content')

<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <div>
        <h1 class="h3 mb-0 text-gray-800">Application #{{ $application->id }}</h1>
        <p class="text-muted small mb-0 mt-1">
            <i class="fas fa-clock mr-1"></i> Submitted {{ $application->created_at->format('d M, Y • h:i A') }}
        </p>
    </div>
    <a href="{{ route('admin.applications.index') }}" class="btn btn-sm btn-secondary shadow-sm">
        <i class="fas fa-arrow-left fa-sm mr-1"></i> Back to Applications
    </a>
</div>

<div class="row">

    {{-- Personal Info --}}
    <div class="col-lg-5 mb-4">
        <div class="card shadow h-100">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">
                    <i class="fas fa-user-circle mr-2"></i> Personal Information
                </h6>
            </div>
            <div class="card-body p-0">
                <table class="table mb-0">
                    <tbody>
                        <tr>
                            <td class="detail-label pl-4" style="width:40%">Student Name</td>
                            <td class="font-weight-bold">{{ $application->student_name }}</td>
                        </tr>
                        <tr>
                            <td class="detail-label pl-4">Email</td>
                            <td>{{ $application->email ?? '—' }}</td>
                        </tr>
                        <tr>
                            <td class="detail-label pl-4">Mobile</td>
                            <td>{{ $application->mobile ?? '—' }}</td>
                        </tr>
                        <tr>
                            <td class="detail-label pl-4">Date of Birth</td>
                            <td>{{ optional($application->dob)->format('d M, Y') ?: '—' }}</td>
                        </tr>
                        <tr>
                            <td class="detail-label pl-4">Father's Name</td>
                            <td>{{ $application->father_name ?? '—' }}</td>
                        </tr>
                        <tr>
                            <td class="detail-label pl-4">Mother's Name</td>
                            <td>{{ $application->mother_name ?? '—' }}</td>
                        </tr>
                        <tr>
                            <td class="detail-label pl-4">Aadhar / ID</td>
                            <td>{{ $application->aadhar_no ?: '—' }}</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    {{-- Academic + Address --}}
    <div class="col-lg-7 mb-4">

        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">
                    <i class="fas fa-graduation-cap mr-2"></i> Academic Details
                </h6>
            </div>
            <div class="card-body p-0">
                <table class="table mb-0">
                    <tbody>
                        <tr>
                            <td class="detail-label pl-4" style="width:40%">Age</td>
                            <td>{{ $application->age ?? '—' }}</td>
                        </tr>
                        <tr>
                            <td class="detail-label pl-4">Course Interest</td>
                            <td>
                                @if($application->course_interest)
                                    <span class="badge badge-primary px-3 py-1">{{ $application->course_interest }}</span>
                                @else —
                                @endif
                            </td>
                        </tr>
                        <tr>
                            <td class="detail-label pl-4">Education Level</td>
                            <td>
                                @if($application->education_level)
                                    <span class="badge badge-warning text-dark px-3 py-1">{{ $application->education_level }}</span>
                                @else
                                    —
                                @endif
                            </td>
                        </tr>
                        <tr>
                            <td class="detail-label pl-4">Graduation %</td>
                            <td>{{ $application->graduation_percentage ?: '—' }}</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>

        <div class="card shadow">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">
                    <i class="fas fa-map-marker-alt mr-2"></i> Address
                </h6>
            </div>
            <div class="card-body">
                <p class="mb-0 text-gray-700" style="line-height:1.8">
                    {{ $application->address ?: 'No address provided.' }}
                </p>
            </div>
        </div>

    </div>

</div>

@endsection
