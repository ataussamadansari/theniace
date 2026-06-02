@extends('layouts.main')

@section('title', 'Computer Courses | THE NIACE')

@section('content')
@php
$computerCourses = [
    ['name'=>'CCA / CCC',                       'duration'=>'3 Months',  'eligibility'=>'10th Pass'],
    ['name'=>'DCA',                              'duration'=>'6 Months',  'eligibility'=>'10th Pass'],
    ['name'=>'ADCA / O Level',                   'duration'=>'12 Months', 'eligibility'=>'10+2 (Any Stream)'],
    ['name'=>'PGDCA',                            'duration'=>'12 Months', 'eligibility'=>'Graduation (Any Stream)'],
    ['name'=>'Tally Prime',                      'duration'=>'3 Months',  'eligibility'=>'10th Pass'],
    ['name'=>'Advance Excel',                    'duration'=>'3 Months',  'eligibility'=>'10th Pass'],
    ['name'=>'Tally + Excel (Combined)',         'duration'=>'6 Months',  'eligibility'=>'10th Pass'],
    ['name'=>'Accounting with GST',              'duration'=>'6 Months',  'eligibility'=>'10+2 (Commerce)'],
    ['name'=>'HTML / CSS / JavaScript',          'duration'=>'6 Months',  'eligibility'=>'10+2 (Any Stream)'],
    ['name'=>'C / C++ Programming',              'duration'=>'6 Months',  'eligibility'=>'10+2 (Any Stream)'],
    ['name'=>'Python Programming',               'duration'=>'6 Months',  'eligibility'=>'10+2 (Any Stream)'],
    ['name'=>'Web Development (Full Stack)',     'duration'=>'12 Months', 'eligibility'=>'10+2 (Any Stream)'],
    ['name'=>'Data Analytics',                   'duration'=>'6 Months',  'eligibility'=>'Graduation (Any Stream)'],
    ['name'=>'Power BI',                         'duration'=>'3 Months',  'eligibility'=>'Graduation (Any Stream)'],
    ['name'=>'Tableau',                          'duration'=>'3 Months',  'eligibility'=>'Graduation (Any Stream)'],
    ['name'=>'MS Office (Word/Excel/PPT)',       'duration'=>'3 Months',  'eligibility'=>'10th Pass'],
];
$imgs = ['c1.webp','c2.webp','c3.webp','c4.webp'];
$pathways = [
    ['title'=>'Computer Fundamentals', 'text'=>'CCA, CCC, DCA, and ADCA build a strong base for office and computer literacy.', 'icon'=>'fa-laptop-code'],
    ['title'=>'Accounting & Office Tools','text'=>'Tally Prime, Advance Excel, and combined accounting programs for job-focused skills.','icon'=>'fa-file-invoice-dollar'],
    ['title'=>'Programming Tracks',    'text'=>'HTML, CSS, JavaScript, C, C++, and Python-based learning for digital careers.','icon'=>'fa-code'],
    ['title'=>'Data & BI Skills',      'text'=>'Data Analytics, Power BI, and Tableau for modern reporting and dashboard roles.','icon'=>'fa-chart-line'],
];
@endphp

{{-- Hero --}}
<section class="inner-hero computer-hero py-5 position-relative overflow-hidden">
    <div class="container position-relative">
        <div class="row align-items-center g-5 py-3">
            <div class="col-lg-7" data-aos="fade-right">
                <span class="section-pill mb-3 d-inline-flex">Computer Courses</span>
                <h1 class="hero-title text-white mb-3">Skill-based training for fast-growing digital careers</h1>
                <p class="hero-subtitle text-white-50 mb-4">{{ count($computerCourses) }}+ computer courses covering office tools, accounting, programming, and data analytics — from beginner to advanced.</p>
                <div class="d-flex flex-wrap gap-3">
                    <a href="#computer-courses" class="btn btn-brand btn-lg px-4">Explore Courses</a>
                    <a href="{{ route('apply.create') }}" class="btn btn-outline-light btn-lg px-4">Apply Now</a>
                </div>
            </div>
            <div class="col-lg-5" data-aos="fade-left">
                <div class="computer-panel">
                    <h5 class="mb-3">Why choose computer training</h5>
                    <div class="computer-feature-list">
                        @foreach(['Practical job-ready software training','Accounting, analytics, and programming options','Beginner to advanced level pathways','Counseling support for the right track'] as $h)
                            <div class="computer-feature-item"><i class="fa-solid fa-circle-check"></i><span>{{ $h }}</span></div>
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
            <div class="col-6 col-lg-3" data-aos="zoom-in"><div class="computer-stat-card"><h3>{{ count($computerCourses) }}+</h3><p>Courses</p></div></div>
            <div class="col-6 col-lg-3" data-aos="zoom-in" data-aos-delay="80"><div class="computer-stat-card"><h3>4</h3><p>Learning Tracks</p></div></div>
            <div class="col-6 col-lg-3" data-aos="zoom-in" data-aos-delay="160"><div class="computer-stat-card"><h3>3 Mo</h3><p>Shortest Course</p></div></div>
            <div class="col-6 col-lg-3" data-aos="zoom-in" data-aos-delay="240"><div class="computer-stat-card"><h3>Career</h3><p>Focused Training</p></div></div>
        </div>
    </div>
</section>

{{-- Course Cards --}}
<section class="py-5 bg-soft" id="computer-courses">
    <div class="container">
        <div class="section-head text-center mb-4" data-aos="fade-up">
            <span class="section-pill mb-3 d-inline-flex">All Computer Programs</span>
            <h2>Choose a course based on your level and career target</h2>
            <p class="text-muted">Duration and eligibility shown on every card for easy comparison.</p>
        </div>
        <div class="row g-4">
            @foreach($computerCourses as $i => $course)
                <div class="col-sm-6 col-lg-4 col-xxl-3" data-aos="zoom-in" data-aos-delay="{{ ($i % 4) * 60 }}">
                    <div class="course-card h-100">
                        <div class="course-card-media">
                            <img src="{{ asset('img/college/'.$imgs[$i % 4]) }}" alt="{{ $course['name'] }}" loading="lazy">
                            <span class="course-badge">Computer</span>
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

{{-- Learning Pathways --}}
<section class="py-5">
    <div class="container">
        <div class="section-head text-center mb-4" data-aos="fade-up">
            <span class="section-pill mb-3 d-inline-flex">Learning Tracks</span>
            <h2>Four pathways to choose from</h2>
        </div>
        <div class="row g-4">
            @foreach($pathways as $p)
                <div class="col-md-6" data-aos="fade-up">
                    <div class="computer-pathway-card h-100">
                        <div class="computer-pathway-icon"><i class="fa-solid {{ $p['icon'] }}"></i></div>
                        <h5>{{ $p['title'] }}</h5>
                        <p class="mb-0">{{ $p['text'] }}</p>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>

{{-- CTA --}}
<section class="py-5 bg-soft">
    <div class="container">
        <div class="computer-cta text-center" data-aos="fade-up">
            <span class="section-pill mb-3 d-inline-flex">Ready to Start?</span>
            <h2 class="mb-3">Pick the right computer course and begin your training</h2>
            <p class="mb-4 text-muted">We help you compare beginner, accounting, programming, and analytics courses before you apply.</p>
            <div class="d-flex justify-content-center flex-wrap gap-3">
                <a href="{{ route('apply.create') }}" class="btn btn-brand btn-lg px-4">Apply Now</a>
                <a href="{{ route('contact') }}" class="btn btn-outline-dark btn-lg px-4">Contact Counselor</a>
            </div>
        </div>
    </div>
</section>

@endsection
