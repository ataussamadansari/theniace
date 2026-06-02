@extends('layouts.main')

@section('title', 'Apply Now | THE NIACE')

@section('content')

{{-- Hero --}}
<section class="inner-hero py-5 position-relative overflow-hidden">
    <div class="container position-relative">
        <div class="row align-items-center g-5 py-2">
            <div class="col-lg-6" data-aos="fade-right">
                <span class="section-pill mb-3 d-inline-flex">Admissions Open</span>
                <h1 class="hero-title text-white mb-3">Start Your Journey With THE NIACE</h1>
                <p class="hero-subtitle text-white-50 mb-4">Fill in the form and our counseling team will reach out to guide you through the right course, eligibility, and admission process.</p>
                <div class="d-flex flex-wrap gap-3">
                    <div class="floating-info-item">
                        <i class="fa-solid fa-phone-volume text-warning me-2"></i>
                        <span class="text-white-75 small">9012027077</span>
                    </div>
                    <div class="floating-info-item">
                        <i class="fa-solid fa-clock text-warning me-2"></i>
                        <span class="text-white-75 small">Mon–Sat, 9am–6pm</span>
                    </div>
                </div>
            </div>
            <div class="col-lg-6" data-aos="fade-left">
                <div class="apply-steps-panel">
                    <h6 class="fw-bold mb-3">What happens after you apply?</h6>
                    <div class="d-flex flex-column gap-2">
                        <div class="apply-step-item"><span class="apply-step-num">1</span> Our team reviews your application</div>
                        <div class="apply-step-item"><span class="apply-step-num">2</span> Counselor calls you within 24 hours</div>
                        <div class="apply-step-item"><span class="apply-step-num">3</span> Course & eligibility guidance provided</div>
                        <div class="apply-step-item"><span class="apply-step-num">4</span> Admission process begins</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

{{-- Form Section --}}
<section class="py-5">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-9">

                @if(session('success'))
                    <div class="alert alert-success d-flex align-items-center gap-2 mb-4 shadow-sm" role="alert">
                        <i class="fa-solid fa-circle-check fa-lg"></i>
                        <div>{{ session('success') }}</div>
                    </div>
                @endif

                <div class="glass-card p-4 p-md-5" data-aos="fade-up">
                    <div class="mb-4">
                        <h3 class="mb-1">Application Form</h3>
                        <p class="text-muted mb-0 small">All fields marked <span class="text-danger">*</span> are required. Others are optional but help us guide you better.</p>
                    </div>

                    <form method="POST" action="{{ route('apply.store') }}">
                        @csrf

                        {{-- Personal Info --}}
                        <h6 class="apply-section-label">Personal Information</h6>
                        <div class="row g-3 mb-4">
                            <div class="col-md-6">
                                <label class="form-label fw-semibold">Student Name <span class="text-danger">*</span></label>
                                <input type="text" name="student_name" class="form-control @error('student_name') is-invalid @enderror"
                                    placeholder="Full name" required value="{{ old('student_name') }}">
                                @error('student_name') <div class="invalid-feedback">{{ $message }}</div> @enderror
                            </div>
                            <div class="col-md-6">
                                <label class="form-label fw-semibold">Mobile <span class="text-danger">*</span></label>
                                <input type="tel" name="mobile" class="form-control @error('mobile') is-invalid @enderror"
                                    placeholder="10-digit mobile number"
                                    pattern="[6-9][0-9]{9}" maxlength="10"
                                    value="{{ old('mobile') }}">
                                @error('mobile') <div class="invalid-feedback">{{ $message }}</div> @enderror
                            </div>
                            <div class="col-md-6">
                                <label class="form-label fw-semibold">Email Address</label>
                                <input type="email" name="email" class="form-control @error('email') is-invalid @enderror"
                                    placeholder="you@example.com" value="{{ old('email') }}">
                                @error('email') <div class="invalid-feedback">{{ $message }}</div> @enderror
                            </div>
                            <div class="col-md-3">
                                <label class="form-label fw-semibold">Date of Birth</label>
                                <input type="date" name="dob" class="form-control" value="{{ old('dob') }}">
                            </div>
                            <div class="col-md-3">
                                <label class="form-label fw-semibold">Age</label>
                                <input type="number" name="age" class="form-control" placeholder="e.g. 20"
                                    min="10" max="60" value="{{ old('age') }}">
                            </div>
                            <div class="col-md-6">
                                <label class="form-label fw-semibold">Father's Name</label>
                                <input type="text" name="father_name" class="form-control"
                                    placeholder="Father's full name" value="{{ old('father_name') }}">
                            </div>
                            <div class="col-md-6">
                                <label class="form-label fw-semibold">Mother's Name</label>
                                <input type="text" name="mother_name" class="form-control"
                                    placeholder="Mother's full name" value="{{ old('mother_name') }}">
                            </div>
                            <div class="col-12">
                                <label class="form-label fw-semibold">Address</label>
                                <textarea name="address" class="form-control" rows="2"
                                    placeholder="Full address">{{ old('address') }}</textarea>
                            </div>
                        </div>

                        {{-- Academic Info --}}
                        <h6 class="apply-section-label">Academic & Course Details</h6>
                        <div class="row g-3 mb-4">
                            <div class="col-md-6">
                                <label class="form-label fw-semibold">Course Interest</label>
                                <select name="course_interest" class="form-select">
                                    <option value="">— Select a course —</option>
                                    <optgroup label="UG Courses">
                                        <option value="B.Tech" {{ old('course_interest') == 'B.Tech' ? 'selected' : '' }}>B.Tech</option>
                                        <option value="BCA" {{ old('course_interest') == 'BCA' ? 'selected' : '' }}>BCA</option>
                                        <option value="B.Com" {{ old('course_interest') == 'B.Com' ? 'selected' : '' }}>B.Com</option>
                                        <option value="B.Sc" {{ old('course_interest') == 'B.Sc' ? 'selected' : '' }}>B.Sc</option>
                                        <option value="BA" {{ old('course_interest') == 'BA' ? 'selected' : '' }}>BA</option>
                                        <option value="BBA" {{ old('course_interest') == 'BBA' ? 'selected' : '' }}>BBA</option>
                                        <option value="B.Ed" {{ old('course_interest') == 'B.Ed' ? 'selected' : '' }}>B.Ed</option>
                                    </optgroup>
                                    <optgroup label="PG Courses">
                                        <option value="MBA" {{ old('course_interest') == 'MBA' ? 'selected' : '' }}>MBA</option>
                                        <option value="MCA" {{ old('course_interest') == 'MCA' ? 'selected' : '' }}>MCA</option>
                                        <option value="M.Tech" {{ old('course_interest') == 'M.Tech' ? 'selected' : '' }}>M.Tech</option>
                                        <option value="MA" {{ old('course_interest') == 'MA' ? 'selected' : '' }}>MA</option>
                                        <option value="M.Com" {{ old('course_interest') == 'M.Com' ? 'selected' : '' }}>M.Com</option>
                                        <option value="M.Sc" {{ old('course_interest') == 'M.Sc' ? 'selected' : '' }}>M.Sc</option>
                                        <option value="M.Ed" {{ old('course_interest') == 'M.Ed' ? 'selected' : '' }}>M.Ed</option>
                                    </optgroup>
                                    <optgroup label="Computer Courses">
                                        <option value="DCA" {{ old('course_interest') == 'DCA' ? 'selected' : '' }}>DCA</option>
                                        <option value="ADCA" {{ old('course_interest') == 'ADCA' ? 'selected' : '' }}>ADCA</option>
                                        <option value="PGDCA" {{ old('course_interest') == 'PGDCA' ? 'selected' : '' }}>PGDCA</option>
                                        <option value="Tally" {{ old('course_interest') == 'Tally' ? 'selected' : '' }}>Tally</option>
                                    </optgroup>
                                    <optgroup label="Certification">
                                        <option value="Certification Course" {{ old('course_interest') == 'Certification Course' ? 'selected' : '' }}>Certification Course</option>
                                    </optgroup>
                                    <option value="Other" {{ old('course_interest') == 'Other' ? 'selected' : '' }}>Other / Not Sure</option>
                                </select>
                            </div>
                            <div class="col-md-6">
                                <label class="form-label fw-semibold">Education Level</label>
                                <select name="education_level" class="form-select">
                                    <option value="">— Select —</option>
                                    <option value="10" {{ old('education_level') == '10' ? 'selected' : '' }}>Class 10</option>
                                    <option value="12" {{ old('education_level') == '12' ? 'selected' : '' }}>Class 12</option>
                                    <option value="Graduation" {{ old('education_level') == 'Graduation' ? 'selected' : '' }}>Graduation</option>
                                    <option value="Post Graduation" {{ old('education_level') == 'Post Graduation' ? 'selected' : '' }}>Post Graduation</option>
                                </select>
                            </div>
                            <div class="col-md-6">
                                <label class="form-label fw-semibold">Graduation Percentage / CGPA</label>
                                <input type="text" name="graduation_percentage" class="form-control"
                                    placeholder="e.g. 72% or 7.5 CGPA" value="{{ old('graduation_percentage') }}">
                            </div>
                            <div class="col-md-6">
                                <label class="form-label fw-semibold">Aadhar / ID Number</label>
                                <input type="text" name="aadhar_no" class="form-control"
                                    placeholder="12-digit Aadhar number" maxlength="12"
                                    value="{{ old('aadhar_no') }}">
                            </div>
                        </div>

                        <div class="d-flex align-items-center gap-3 flex-wrap">
                            <button type="submit" class="btn btn-brand btn-lg px-5">
                                <i class="fa-solid fa-paper-plane me-2"></i> Submit Application
                            </button>
                            <p class="text-muted small mb-0">
                                <i class="fa-solid fa-lock me-1"></i> Your information is safe with us.
                            </p>
                        </div>

                    </form>
                </div>

            </div>
        </div>
    </div>
</section>

@endsection
