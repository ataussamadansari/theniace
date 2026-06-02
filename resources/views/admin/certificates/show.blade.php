@extends('admin.layout')

@section('title', 'Certificate Details | THE NIACE Admin')

@section('content')

<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Certificate Details</h1>
    <a href="{{ route('admin.certificates.index') }}" class="btn btn-sm btn-secondary shadow-sm">
        <i class="fas fa-arrow-left fa-sm mr-1"></i> Back
    </a>
</div>

<div class="card shadow mb-4">
    <div class="card-body">
        <div class="row">

            {{-- Photo --}}
            <div class="col-md-3 text-center mb-4 mb-md-0">
                <img src="{{ $certificate->student_photo ? asset('storage/'.$certificate->student_photo) : 'https://via.placeholder.com/220x260?text=Photo' }}"
                     alt="Student Photo"
                     class="img-fluid rounded shadow-sm"
                     style="max-height:260px; object-fit:cover;">
                @if($certificate->certificate_pdf)
                    <a href="{{ asset('storage/'.$certificate->certificate_pdf) }}" target="_blank"
                       class="btn btn-outline-primary btn-sm mt-3 d-block">
                        <i class="fas fa-file-pdf mr-1"></i> View PDF
                    </a>
                @endif
            </div>

            {{-- Details --}}
            <div class="col-md-9">
                <div class="d-flex align-items-center justify-content-between mb-3">
                    <div>
                        <h4 class="font-weight-bold mb-0">{{ $certificate->student_name }}</h4>
                        <p class="text-muted mb-0 small">{{ $certificate->course_name }}</p>
                    </div>
                    <span class="badge badge-status badge-{{ strtolower($certificate->status) }} px-3 py-2" style="font-size:0.85rem;">
                        {{ $certificate->status }}
                    </span>
                </div>

                <div class="row">
                    <div class="col-sm-6 mb-3">
                        <div class="detail-label">Certificate Number</div>
                        <div><span class="cert-chip">{{ $certificate->certificate_number }}</span></div>
                    </div>
                    <div class="col-sm-6 mb-3">
                        <div class="detail-label">Father's Name</div>
                        <div>{{ $certificate->father_name }}</div>
                    </div>
                    <div class="col-sm-6 mb-3">
                        <div class="detail-label">Session</div>
                        <div>{{ $certificate->session }}</div>
                    </div>
                    <div class="col-sm-6 mb-3">
                        <div class="detail-label">Duration</div>
                        <div>{{ $certificate->duration }}</div>
                    </div>
                    <div class="col-sm-6 mb-3">
                        <div class="detail-label">Grade</div>
                        <div><span class="badge badge-primary px-3">{{ $certificate->grade }}</span></div>
                    </div>
                    <div class="col-sm-6 mb-3">
                        <div class="detail-label">Issue Date</div>
                        <div>{{ optional($certificate->issue_date)->format('d M, Y') ?? '—' }}</div>
                    </div>
                </div>

                <div class="mt-2">
                    <a href="{{ route('admin.certificates.edit', $certificate) }}" class="btn btn-primary btn-sm mr-2">
                        <i class="fas fa-pen mr-1"></i> Edit Certificate
                    </a>
                    <a href="{{ route('admin.certificates.index') }}" class="btn btn-outline-secondary btn-sm">
                        Back to List
                    </a>
                </div>
            </div>

        </div>
    </div>
</div>

@endsection
