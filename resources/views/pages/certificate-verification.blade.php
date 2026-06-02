@extends('layouts.main')

@section('title', 'Certificate Verification | THE NIACE')

@section('content')
<section class="inner-hero py-5">
    <div class="container text-center" data-aos="fade-up">
        <span class="section-pill mb-3 d-inline-flex">Instant Verification</span>
        <h1 class="text-white mb-3">Certificate Verification</h1>
        <p class="hero-subtitle text-white-50">Verify the authenticity of any THE NIACE certificate instantly by entering the certificate number below.</p>
    </div>
</section>

<section class="py-5">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8" data-aos="fade-up">
                <div class="glass-card p-4 p-md-5">

                    {{-- Search Form --}}
                    <form action="{{ route('certificate.verify') }}" method="POST" class="mb-4">
                        @csrf
                        <label class="form-label fw-semibold">Enter Certificate Number</label>
                        <div class="input-group input-group-lg">
                            <span class="input-group-text bg-white">
                                <i class="fa-solid fa-magnifying-glass text-muted"></i>
                            </span>
                            <input type="text" name="certificate_number"
                                value="{{ old('certificate_number', $searchedNumber ?? '') }}"
                                class="form-control @error('certificate_number') is-invalid @enderror"
                                placeholder="e.g. NIACE-UG-24001" required>
                            <button class="btn btn-brand" type="submit">Verify</button>
                        </div>
                        @error('certificate_number')
                            <div class="mt-2 text-danger small d-flex align-items-center gap-1">
                                <i class="fa-solid fa-circle-exclamation"></i> {{ $message }}
                            </div>
                        @enderror
                    </form>

                    {{-- Not Found State --}}
                    @if($errors->has('certificate_number') && old('certificate_number'))
                        <div class="text-center py-4" data-aos="zoom-in">
                            <div class="mb-3">
                                <i class="fa-solid fa-circle-xmark fa-3x text-danger opacity-75"></i>
                            </div>
                            <h5 class="text-danger mb-1">Certificate Not Found</h5>
                            <p class="text-muted mb-3">No record found for <strong>{{ old('certificate_number') }}</strong>. Please double-check the number and try again.</p>
                            <p class="text-muted small mb-0">If you believe this is an error, contact us at
                                <a href="mailto:customercare.thenaice@gmail.com">customercare.thenaice@gmail.com</a>
                            </p>
                        </div>
                    @endif

                    {{-- Found State --}}
                    @if($certificate)
                        <div class="verification-result" data-aos="zoom-in">
                            <div class="d-flex align-items-center gap-2 mb-4">
                                <i class="fa-solid fa-shield-check fa-lg text-success"></i>
                                <span class="fw-bold text-success">Certificate Verified Successfully</span>
                                <span class="badge text-bg-success ms-auto">Authentic</span>
                            </div>
                            <div class="row g-4 align-items-center">
                                <div class="col-md-4 text-center">
                                    <img src="{{ $certificate->student_photo ? asset('storage/'.$certificate->student_photo) : 'https://via.placeholder.com/240x260?text=Photo' }}"
                                         class="img-fluid rounded-4 border shadow-sm" alt="Student Photo" loading="lazy"
                                         style="max-height:260px; object-fit:cover;">
                                </div>
                                <div class="col-md-8">
                                    <h4 class="mb-1">{{ $certificate->student_name }}</h4>
                                    <p class="text-muted small mb-3">Father: {{ $certificate->father_name }}</p>
                                    <div class="row g-2 small">
                                        <div class="col-sm-6">
                                            <span class="text-muted d-block">Course</span>
                                            <strong>{{ $certificate->course_name }}</strong>
                                        </div>
                                        <div class="col-sm-6">
                                            <span class="text-muted d-block">Session</span>
                                            <strong>{{ $certificate->session }}</strong>
                                        </div>
                                        <div class="col-sm-6">
                                            <span class="text-muted d-block">Duration</span>
                                            <strong>{{ $certificate->duration }}</strong>
                                        </div>
                                        <div class="col-sm-6">
                                            <span class="text-muted d-block">Grade</span>
                                            <strong>{{ $certificate->grade }}</strong>
                                        </div>
                                        <div class="col-sm-6">
                                            <span class="text-muted d-block">Status</span>
                                            <span class="badge {{ $certificate->status === 'Verified' ? 'text-bg-success' : 'text-bg-warning' }}">
                                                {{ $certificate->status }}
                                            </span>
                                        </div>
                                        <div class="col-sm-6">
                                            <span class="text-muted d-block">Issue Date</span>
                                            <strong>{{ optional($certificate->issue_date)->format('d M Y') }}</strong>
                                        </div>
                                    </div>
                                    <div class="mt-3 pt-3 border-top d-flex gap-2 flex-wrap align-items-center">
                                        @if($certificate->certificate_pdf)
                                            <a href="{{ URL::signedRoute('certificate.download', ['certificate' => $certificate->id]) }}"
                                               class="btn btn-brand btn-sm">
                                                <i class="fa-solid fa-download me-1"></i> Download Certificate
                                            </a>
                                        @endif
                                        <span class="badge text-bg-dark p-2">
                                            <i class="fa-solid fa-hashtag me-1"></i>{{ $certificate->certificate_number }}
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endif

                    {{-- Default idle state --}}
                    @if(!$certificate && !$errors->has('certificate_number') && !$searchedNumber)
                        <div class="text-center py-3 text-muted small">
                            <i class="fa-solid fa-shield fa-2x mb-2 d-block opacity-25"></i>
                            Enter a certificate number above to verify its authenticity.
                        </div>
                    @endif

                </div>
            </div>
        </div>
    </div>
</section>
@endsection
