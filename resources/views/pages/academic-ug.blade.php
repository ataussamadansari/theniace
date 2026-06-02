@extends('layouts.main')

@section('title', 'UG Courses | THE NIACE')

@section('content')
@php
$ugCourses = [
    ['name'=>'B.Tech',              'duration'=>'4 Years / 8 Sem',  'eligibility'=>'10+2 (Any Stream)'],
    ['name'=>'BA',                  'duration'=>'3 Years / 6 Sem',  'eligibility'=>'10+2 (Any Stream)'],
    ['name'=>'BBA',                 'duration'=>'3 Years / 6 Sem',  'eligibility'=>'10+2 (Any Stream)'],
    ['name'=>'BCA',                 'duration'=>'3 Years / 6 Sem',  'eligibility'=>'10+2 (Science / Commerce / Arts)'],
    ['name'=>'B.Com',               'duration'=>'3 Years / 6 Sem',  'eligibility'=>'10+2 (Commerce Preferred)'],
    ['name'=>'B.Sc',                'duration'=>'3 Years / 6 Sem',  'eligibility'=>'10+2 (Science Stream)'],
    ['name'=>'BA LL.B',             'duration'=>'5 Years / 10 Sem', 'eligibility'=>'10+2 (Any Stream)'],
    ['name'=>'B.Com LL.B',          'duration'=>'5 Years / 10 Sem', 'eligibility'=>'10+2 (Commerce Preferred)'],
    ['name'=>'BBA LL.B',            'duration'=>'5 Years / 10 Sem', 'eligibility'=>'10+2 (Any Stream)'],
    ['name'=>'B.Pharma',            'duration'=>'4 Years / 8 Sem',  'eligibility'=>'10+2 (Science Stream)'],
    ['name'=>'D.Pharma',            'duration'=>'2 Years / 4 Sem',  'eligibility'=>'10+2 (Science Stream)'],
    ['name'=>'DHM',                 'duration'=>'2 Years / 4 Sem',  'eligibility'=>'10+2 Pass'],
    ['name'=>'BHM',                 'duration'=>'4 Years / 8 Sem',  'eligibility'=>'10+2 Pass'],
    ['name'=>'Polytechnic (Diploma)','duration'=>'2 Years / 4 Sem', 'eligibility'=>'10th / 12th Pass'],
    ['name'=>'BSW',                 'duration'=>'3 Years / 6 Sem',  'eligibility'=>'10+2 (Any Stream)'],
    ['name'=>'B.El.Ed',             'duration'=>'4 Years / 8 Sem',  'eligibility'=>'10+2 (Any Stream)'],
    ['name'=>'BPT',                 'duration'=>'4.5 Years',        'eligibility'=>'10+2 (Science Stream)'],
    ['name'=>'GNM',                 'duration'=>'3 Years',          'eligibility'=>'10+2 (Science Stream)'],
    ['name'=>'ANM',                 'duration'=>'2 Years',          'eligibility'=>'10+2 (Science Stream)'],
    ['name'=>'DMLT',                'duration'=>'2 Years',          'eligibility'=>'10+2 (Science Stream)'],
    ['name'=>'BMLT',                'duration'=>'3 Years / 6 Sem',  'eligibility'=>'10+2 (Science Stream)'],
    ['name'=>'BRIT',                'duration'=>'3 Years / 6 Sem',  'eligibility'=>'10+2 (Science Stream)'],
    ['name'=>'BFA',                 'duration'=>'4 Years / 8 Sem',  'eligibility'=>'10+2 (Any Stream)'],
    ['name'=>'BPES',                'duration'=>'3 Years / 6 Sem',  'eligibility'=>'10+2 (Any Stream)'],
    ['name'=>'BJMC',                'duration'=>'3 Years / 6 Sem',  'eligibility'=>'10+2 (Any Stream)'],
    ['name'=>'Fashion Designing',   'duration'=>'3 Years / 6 Sem',  'eligibility'=>'10+2 (Any Stream)'],
    ['name'=>'Agriculture (B.Sc)',  'duration'=>'4 Years / 8 Sem',  'eligibility'=>'10+2 (Science Stream)'],
    ['name'=>'Yoga (B.Sc)',         'duration'=>'3 Years / 6 Sem',  'eligibility'=>'10+2 (Any Stream)'],
    ['name'=>'OTT',                 'duration'=>'3 Years / 6 Sem',  'eligibility'=>'10+2 (Science Stream)'],
];
$imgs = ['c1.webp','c2.webp','c3.webp','c4.webp'];
@endphp

{{-- Hero --}}
<section class="inner-hero py-5 position-relative overflow-hidden">
    <div class="container position-relative">
        <div class="row align-items-center g-5 py-3">
            <div class="col-lg-7" data-aos="fade-right">
                <span class="section-pill mb-3 d-inline-flex">Undergraduate Programs</span>
                <h1 class="hero-title text-white mb-3">Launch your career with the right UG degree</h1>
                <p class="hero-subtitle text-white-50 mb-4">Choose from {{ count($ugCourses) }}+ undergraduate programs across engineering, management, science, law, health, and arts — with full admission guidance.</p>
                <div class="d-flex flex-wrap gap-3">
                    <a href="#ug-courses" class="btn btn-brand btn-lg px-4">Browse UG Courses</a>
                    <a href="{{ route('apply.create') }}" class="btn btn-outline-light btn-lg px-4">Apply Now</a>
                </div>
            </div>
            <div class="col-lg-5" data-aos="fade-left">
                <div class="pg-hero-panel">
                    <h5 class="mb-3">Why choose UG at THE NIACE</h5>
                    <div class="pg-feature-list">
                        @foreach(['UGC-approved university programs','Guidance for all streams','Affordable fee structure','1:1 counseling support'] as $h)
                            <div class="pg-feature-item"><i class="fa-solid fa-circle-check"></i><span>{{ $h }}</span></div>
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
            <div class="col-6 col-lg-3" data-aos="zoom-in"><div class="pg-stat-card"><h3>{{ count($ugCourses) }}+</h3><p>UG Programs</p></div></div>
            <div class="col-6 col-lg-3" data-aos="zoom-in" data-aos-delay="80"><div class="pg-stat-card"><h3>70+</h3><p>Universities</p></div></div>
            <div class="col-6 col-lg-3" data-aos="zoom-in" data-aos-delay="160"><div class="pg-stat-card"><h3>1:1</h3><p>Counseling</p></div></div>
            <div class="col-6 col-lg-3" data-aos="zoom-in" data-aos-delay="240"><div class="pg-stat-card"><h3>100%</h3><p>Admission Help</p></div></div>
        </div>
    </div>
</section>

{{-- Course Cards --}}
<section class="py-5 bg-soft" id="ug-courses">
    <div class="container">
        <div class="section-head text-center mb-4" data-aos="fade-up">
            <span class="section-pill mb-3 d-inline-flex">All UG Programs</span>
            <h2>Choose the undergraduate program that fits your goals</h2>
            <p class="text-muted">Duration and eligibility shown on every card for easy comparison.</p>
        </div>
        <div class="row g-4">
            @foreach($ugCourses as $i => $course)
                <div class="col-sm-6 col-lg-4 col-xxl-3" data-aos="zoom-in" data-aos-delay="{{ ($i % 4) * 60 }}">
                    <div class="course-card h-100">
                        <div class="course-card-media">
                            <img src="{{ asset('img/college/'.$imgs[$i % 4]) }}" alt="{{ $course['name'] }}" loading="lazy">
                            <span class="course-badge">UG</span>
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

{{-- Admission Steps --}}
<section class="py-5">
    <div class="container">
        <div class="row g-4 align-items-center">
            <div class="col-lg-5" data-aos="fade-right">
                <div class="pg-panel h-100">
                    <span class="section-pill mb-3 d-inline-flex">Admission Process</span>
                    <h2 class="mb-3">Simple steps to get admitted</h2>
                    <div class="timeline">
                        @foreach(['Choose your UG program','Check eligibility & documents','Apply with counseling support','Complete verification & admission'] as $step)
                            <div class="timeline-item"><span>{{ $loop->iteration }}</span><h6>{{ $step }}</h6></div>
                        @endforeach
                    </div>
                </div>
            </div>
            <div class="col-lg-7" data-aos="fade-left">
                <div class="pg-panel h-100">
                    <span class="section-pill mb-3 d-inline-flex">Eligibility Overview</span>
                    <h2 class="mb-3">What UG programs generally require</h2>
                    <div class="row g-3">
                        @foreach([
                            ['Academic base','Most UG programs require 10+2 pass from a recognized board.'],
                            ['Stream-specific','Engineering, Science, and Pharmacy require PCM/PCB background.'],
                            ['Document support','We help verify documents and match the right program.'],
                            ['Easy next step','Contact our counselor for current availability and fee details.'],
                        ] as $e)
                            <div class="col-md-6">
                                <div class="pg-eligibility-card">
                                    <h6>{{ $e[0] }}</h6>
                                    <p class="mb-0">{{ $e[1] }}</p>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

{{-- CTA --}}
<section class="py-5 bg-soft">
    <div class="container">
        <div class="pg-cta text-center" data-aos="fade-up">
            <span class="section-pill mb-3 d-inline-flex">Ready to Apply?</span>
            <h2 class="mb-3">Start your UG admission journey today</h2>
            <p class="mb-4 text-muted">Our counselors will guide you through eligibility, documents, and the right university choice.</p>
            <div class="d-flex justify-content-center flex-wrap gap-3">
                <a href="{{ route('apply.create') }}" class="btn btn-brand btn-lg px-4">Apply Now</a>
                <a href="{{ route('contact') }}" class="btn btn-outline-dark btn-lg px-4">Talk to Counselor</a>
            </div>
        </div>
    </div>
</section>

@endsection
