@extends('layouts.main')

@section('title', 'PG Courses | THE NIACE')

@section('content')
@php
$pgCourses = [
    ['name'=>'MBA',         'duration'=>'2 Years / Sem', 'eligibility'=>'Graduation (Any Stream)'],
    ['name'=>'MCA',         'duration'=>'2 Years / Sem', 'eligibility'=>'Graduation (Any Stream)'],
    ['name'=>'M.Tech',      'duration'=>'2 Years / Sem', 'eligibility'=>'B.Tech / B.E.'],
    ['name'=>'MA',          'duration'=>'2 Years / Sem', 'eligibility'=>'Graduation (Any Stream)'],
    ['name'=>'M.Com',       'duration'=>'2 Years / Sem', 'eligibility'=>'B.Com (Any Equivalent)'],
    ['name'=>'M.Sc',        'duration'=>'2 Years / Sem', 'eligibility'=>'B.Sc (Relevant Stream)'],
    ['name'=>'LL.B',        'duration'=>'3 Years / Sem', 'eligibility'=>'Graduation (Any Stream)'],
    ['name'=>'LL.M',        'duration'=>'2 Years / Sem', 'eligibility'=>'LL.B Degree'],
    ['name'=>'M.Pharma',    'duration'=>'2 Years / Sem', 'eligibility'=>'B.Pharma'],
    ['name'=>'D.El.Ed',     'duration'=>'2 Years',       'eligibility'=>'Graduation (Any Stream)'],
    ['name'=>'B.Ed',        'duration'=>'2 Years',       'eligibility'=>'Graduation (Any Stream)'],
    ['name'=>'MSW',         'duration'=>'2 Years / Sem', 'eligibility'=>'Graduation (Any Stream)'],
    ['name'=>'MPT',         'duration'=>'2 Years / Sem', 'eligibility'=>'BPT Degree'],
    ['name'=>'M.Ed',        'duration'=>'2 Years / Sem', 'eligibility'=>'B.Ed Degree'],
    ['name'=>'B.P.Ed',      'duration'=>'2 Years / Sem', 'eligibility'=>'Graduation (Any Stream)'],
    ['name'=>'B.LIS',       'duration'=>'1 Year',        'eligibility'=>'Graduation (Any Stream)'],
    ['name'=>'M.LIS',       'duration'=>'1 Year',        'eligibility'=>'B.LIS Degree'],
    ['name'=>'MJMC',        'duration'=>'2 Years / Sem', 'eligibility'=>'Graduation (Any Stream)'],
    ['name'=>'M.FA (Fine Arts)', 'duration'=>'2 Years / Sem', 'eligibility'=>'BFA or Graduation'],
    ['name'=>'Fire & Safety (PG Diploma)', 'duration'=>'1 Year', 'eligibility'=>'Graduation (Any Stream)'],
];
$imgs = ['c1.webp','c2.webp','c3.webp','c4.webp'];
@endphp

{{-- Hero --}}
<section class="inner-hero pg-hero py-5 position-relative overflow-hidden">
    <div class="container position-relative">
        <div class="row align-items-center g-5 py-3">
            <div class="col-lg-7" data-aos="fade-right">
                <span class="section-pill mb-3 d-inline-flex">Postgraduate Programs</span>
                <h1 class="hero-title text-white mb-3">Build a stronger career with a complete PG pathway</h1>
                <p class="hero-subtitle text-white-50 mb-4">Explore {{ count($pgCourses) }}+ postgraduate courses across management, technology, education, law, media, pharmacy, and allied disciplines.</p>
                <div class="d-flex flex-wrap gap-3">
                    <a href="#pg-courses" class="btn btn-brand btn-lg px-4">Browse PG Programs</a>
                    <a href="{{ route('apply.create') }}" class="btn btn-outline-light btn-lg px-4">Apply Now</a>
                </div>
            </div>
            <div class="col-lg-5" data-aos="fade-left">
                <div class="pg-hero-panel">
                    <h5 class="mb-3">Why students choose PG at THE NIACE</h5>
                    <div class="pg-feature-list">
                        @foreach(['Career-focused postgraduate programs','Flexible eligibility across streams','Industry-aligned academic guidance','Support for admissions and counseling'] as $h)
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
            <div class="col-6 col-lg-3" data-aos="zoom-in"><div class="pg-stat-card"><h3>{{ count($pgCourses) }}+</h3><p>PG Programs</p></div></div>
            <div class="col-6 col-lg-3" data-aos="zoom-in" data-aos-delay="80"><div class="pg-stat-card"><h3>6+</h3><p>Study Streams</p></div></div>
            <div class="col-6 col-lg-3" data-aos="zoom-in" data-aos-delay="160"><div class="pg-stat-card"><h3>1:1</h3><p>Counseling Support</p></div></div>
            <div class="col-6 col-lg-3" data-aos="zoom-in" data-aos-delay="240"><div class="pg-stat-card"><h3>100%</h3><p>Admission Guidance</p></div></div>
        </div>
    </div>
</section>

{{-- Course Cards --}}
<section class="py-5 bg-soft" id="pg-courses">
    <div class="container">
        <div class="section-head text-center mb-4" data-aos="fade-up">
            <span class="section-pill mb-3 d-inline-flex">All PG Programs</span>
            <h2>Choose the postgraduate program that fits your goals</h2>
            <p class="text-muted">Duration and eligibility shown on every card for easy comparison.</p>
        </div>
        <div class="row g-4">
            @foreach($pgCourses as $i => $course)
                <div class="col-sm-6 col-lg-4 col-xxl-3" data-aos="zoom-in" data-aos-delay="{{ ($i % 4) * 60 }}">
                    <div class="course-card h-100">
                        <div class="course-card-media">
                            <img src="{{ asset('img/college/'.$imgs[$i % 4]) }}" alt="{{ $course['name'] }}" loading="lazy">
                            <span class="course-badge">PG</span>
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

{{-- Admission Steps + Eligibility --}}
<section class="py-5">
    <div class="container">
        <div class="row g-4 align-items-start">
            <div class="col-lg-5" data-aos="fade-right">
                <div class="pg-panel h-100">
                    <span class="section-pill mb-3 d-inline-flex">Admission Flow</span>
                    <h2 class="mb-3">Simple steps to begin your PG journey</h2>
                    <div class="timeline">
                        @foreach(['Choose your PG program','Check eligibility and documents','Apply with counseling support','Complete verification and admission'] as $step)
                            <div class="timeline-item"><span>{{ $loop->iteration }}</span><h6>{{ $step }}</h6></div>
                        @endforeach
                    </div>
                </div>
            </div>
            <div class="col-lg-7" data-aos="fade-left">
                <div class="pg-panel h-100">
                    <span class="section-pill mb-3 d-inline-flex">Eligibility Snapshot</span>
                    <h2 class="mb-3">What most PG programs require</h2>
                    <div class="row g-3">
                        @foreach([
                            ['Academic base','Most PG programs require a graduation degree or equivalent qualification.'],
                            ['Course-specific rules','M.Tech, M.Ed, B.Ed, and pharmacy have stream-based eligibility.'],
                            ['Guidance available','Our team helps verify documents and match the right PG course.'],
                            ['Easy next step','Contact our counselor for current availability and admission details.'],
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
            <span class="section-pill mb-3 d-inline-flex">Need Help?</span>
            <h2 class="mb-3">Get counseling for the right PG course today</h2>
            <p class="mb-4 text-muted">We help you compare eligibility, duration, and specialization before you apply.</p>
            <div class="d-flex justify-content-center flex-wrap gap-3">
                <a href="{{ route('apply.create') }}" class="btn btn-brand btn-lg px-4">Apply Now</a>
                <a href="{{ route('contact') }}" class="btn btn-outline-dark btn-lg px-4">Contact Counselor</a>
            </div>
        </div>
    </div>
</section>

@endsection
