@extends('layouts.main')

@section('title', 'Certification Programs | THE NIACE')

@section('content')
@php
$certCourses = [
    ['name'=>'NTT (Nursery Teacher Training)',   'duration'=>'24 Months', 'eligibility'=>'10+2 (Any Stream)'],
    ['name'=>'PTT (Primary Teacher Training)',   'duration'=>'24 Months', 'eligibility'=>'10+2 (Any Stream)'],
    ['name'=>'CTT (Computer Teacher Training)',  'duration'=>'12 Months', 'eligibility'=>'10+2 (Any Stream)'],
    ['name'=>'Nursery / Primary Diploma',        'duration'=>'12 Months', 'eligibility'=>'10+2 (Any Stream)'],
    ['name'=>'Advertising & PR',                 'duration'=>'12 Months', 'eligibility'=>'10+2 (Any Stream)'],
    ['name'=>'Journalism (Certificate)',         'duration'=>'12 Months', 'eligibility'=>'10+2 (Any Stream)'],
    ['name'=>'Camera & Lighting Technology',     'duration'=>'12 Months', 'eligibility'=>'10+2 (Any Stream)'],
    ['name'=>'Housekeeping (Certificate)',       'duration'=>'6 Months',  'eligibility'=>'10th Pass'],
    ['name'=>'Social Work (Certificate)',        'duration'=>'12 Months', 'eligibility'=>'10+2 (Any Stream)'],
    ['name'=>'Guidance & Counseling',            'duration'=>'12 Months', 'eligibility'=>'Graduation (Any Stream)'],
    ['name'=>'Rural Development (Diploma)',      'duration'=>'12 Months', 'eligibility'=>'10+2 (Any Stream)'],
    ['name'=>'Yoga (Certificate)',               'duration'=>'6 Months',  'eligibility'=>'10th Pass'],
    ['name'=>'Agriculture (Certificate)',        'duration'=>'12 Months', 'eligibility'=>'10+2 (Science)'],
    ['name'=>'Interior Designing',               'duration'=>'12 Months', 'eligibility'=>'10+2 (Any Stream)'],
    ['name'=>'Fashion Designing (Certificate)',  'duration'=>'12 Months', 'eligibility'=>'10+2 (Any Stream)'],
    ['name'=>'Tourism & Hospitality',            'duration'=>'12 Months', 'eligibility'=>'10+2 (Any Stream)'],
    ['name'=>'Fire & Safety (Certificate)',      'duration'=>'12 Months', 'eligibility'=>'10+2 (Any Stream)'],
    ['name'=>'PG Diploma in Fire & Safety',      'duration'=>'12 Months', 'eligibility'=>'Graduation (Any Stream)'],
    ['name'=>'Diploma in Fine Arts',             'duration'=>'24 Months', 'eligibility'=>'10+2 (Any Stream)'],
];
$imgs = ['c1.webp','c2.webp','c3.webp','c4.webp'];
$tracks = [
    ['title'=>'Teaching & Education',    'text'=>'NTT, PTT, CTT, and Nursery/Primary training for classroom and early education roles.','icon'=>'fa-chalkboard-user'],
    ['title'=>'Media & Communication',   'text'=>'Advertising, Journalism, and Camera & Lighting technology for creative and media careers.','icon'=>'fa-clapperboard'],
    ['title'=>'Service & Community',     'text'=>'Housekeeping, Social Work, Guidance & Counseling, and Rural Development for service-focused careers.','icon'=>'fa-people-group'],
    ['title'=>'Lifestyle & Applied Skills','text'=>'Yoga, Agriculture, Interior Designing, Fashion Designing, and Tourism & Hospitality for practical specialization.','icon'=>'fa-compass-drafting'],
];
@endphp

{{-- Hero --}}
<section class="inner-hero certification-hero py-5 position-relative overflow-hidden">
    <div class="container position-relative">
        <div class="row align-items-center g-5 py-3">
            <div class="col-lg-7" data-aos="fade-right">
                <span class="section-pill mb-3 d-inline-flex">Certification Programs</span>
                <h1 class="hero-title text-white mb-3">Build practical skills with short-term certification programs</h1>
                <p class="hero-subtitle text-white-50 mb-4">{{ count($certCourses) }}+ certification and diploma programs across teaching, media, hospitality, social work, yoga, agriculture, and more.</p>
                <div class="d-flex flex-wrap gap-3">
                    <a href="#cert-courses" class="btn btn-brand btn-lg px-4">Browse Certifications</a>
                    <a href="{{ route('apply.create') }}" class="btn btn-outline-light btn-lg px-4">Apply Now</a>
                </div>
            </div>
            <div class="col-lg-5" data-aos="fade-left">
                <div class="cert-panel">
                    <h5 class="mb-3">Why certification programs work</h5>
                    <div class="cert-feature-list">
                        @foreach(['Short-term industry-ready programs','Career support for skill-based learning','Flexible eligibility across streams','Options for teaching, media, hospitality, and development'] as $h)
                            <div class="cert-feature-item"><i class="fa-solid fa-circle-check"></i><span>{{ $h }}</span></div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

{{-- Stats --}}
<section class="py-4">
    <div class="container">
        <div class="row g-4">
            <div class="col-6 col-lg-3" data-aos="zoom-in"><div class="cert-stat-card"><h3>{{ count($certCourses) }}+</h3><p>Programs</p></div></div>
            <div class="col-6 col-lg-3" data-aos="zoom-in" data-aos-delay="80"><div class="cert-stat-card"><h3>4</h3><p>Learning Tracks</p></div></div>
            <div class="col-6 col-lg-3" data-aos="zoom-in" data-aos-delay="160"><div class="cert-stat-card"><h3>6 Mo</h3><p>Shortest Course</p></div></div>
            <div class="col-6 col-lg-3" data-aos="zoom-in" data-aos-delay="240"><div class="cert-stat-card"><h3>Guided</h3><p>Admission Support</p></div></div>
        </div>
    </div>
</section>

{{-- Course Cards --}}
<section class="py-5 bg-soft" id="cert-courses">
    <div class="container">
        <div class="section-head text-center mb-4" data-aos="fade-up">
            <span class="section-pill mb-3 d-inline-flex">All Certification Programs</span>
            <h2>Practical certificates and diplomas for different career goals</h2>
            <p class="text-muted">Duration and eligibility shown on every card for easy comparison.</p>
        </div>
        <div class="row g-4">
            @foreach($certCourses as $i => $course)
                <div class="col-sm-6 col-lg-4 col-xxl-3" data-aos="zoom-in" data-aos-delay="{{ ($i % 4) * 60 }}">
                    <div class="course-card h-100">
                        <div class="course-card-media">
                            <img src="{{ asset('img/college/'.$imgs[$i % 4]) }}" alt="{{ $course['name'] }}" loading="lazy">
                            <span class="course-badge">Cert</span>
                        </div>
                        <div class="course-card-body">
                            <h5 class="course-card-title">{{ $course['name'] }}</h5>
                            <div class="course-meta">
                                <div class="course-meta-item"><i class="fa-regular fa-clock"></i><span>{{ $course['duration'] }}</span></div>
                                <div class="course-meta-item"><i class="fa-solid fa-graduation-cap"></i><span>{{ $course['eligibility'] }}</span></div>
                            </div>
                            <a href="{{ route('apply.create') }}?course={{ urlencode($course['name']) }}" class="course-link">
                                Apply Now <i class="fa-solid fa-arrow-right"></i>
                            </a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>

{{-- Tracks --}}
<section class="py-5">
    <div class="container">
        <div class="section-head text-center mb-4" data-aos="fade-up">
            <span class="section-pill mb-3 d-inline-flex">Learning Tracks</span>
            <h2>Four certification pathways</h2>
        </div>
        <div class="row g-4">
            @foreach($tracks as $t)
                <div class="col-md-6" data-aos="fade-up">
                    <div class="cert-track-card h-100">
                        <div class="cert-track-icon"><i class="fa-solid {{ $t['icon'] }}"></i></div>
                        <h5>{{ $t['title'] }}</h5>
                        <p class="mb-0">{{ $t['text'] }}</p>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>

{{-- CTA --}}
<section class="py-5 bg-soft">
    <div class="container">
        <div class="cert-cta text-center" data-aos="fade-up">
            <span class="section-pill mb-3 d-inline-flex">Need Help?</span>
            <h2 class="mb-3">Find the best certificate or diploma program for your goals</h2>
            <p class="mb-4 text-muted">We help you compare eligibility, duration, and specializations before you apply.</p>
            <div class="d-flex justify-content-center flex-wrap gap-3">
                <a href="{{ route('apply.create') }}" class="btn btn-brand btn-lg px-4">Apply Now</a>
                <a href="{{ route('contact') }}" class="btn btn-outline-dark btn-lg px-4">Contact Counselor</a>
            </div>
        </div>
    </div>
</section>

@endsection
