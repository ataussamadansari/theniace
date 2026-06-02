@extends('layouts.main')

@section('title', 'Distance University Programs | THE NIACE')

@section('content')
@php
$universities = [
    ['name' => 'IIMT University',        'grade' => 'NAAC A',       'img' => 'u10.webp'],
    ['name' => 'Subharti University',    'grade' => 'NAAC A+',      'img' => 'u6.webp'],
    ['name' => 'Mangalyatan University', 'grade' => 'UGC Approved', 'img' => 'u5.webp'],
    ['name' => 'Shobhit University',     'grade' => 'NAAC A',       'img' => 'u4.webp'],
    ['name' => 'MATS University',        'grade' => 'UGC Approved', 'img' => 'u12.webp'],
    ['name' => 'Lovely Professional University', 'grade' => 'NAAC A++', 'img' => 'u1.webp'],
];

$distanceCourses = [
    ['name'=>'BA (Distance)',       'duration'=>'3 Years', 'eligibility'=>'10+2 (Any Stream)'],
    ['name'=>'B.Com (Distance)',    'duration'=>'3 Years', 'eligibility'=>'10+2 (Commerce)'],
    ['name'=>'BCA (Distance)',      'duration'=>'3 Years', 'eligibility'=>'10+2 (Any Stream)'],
    ['name'=>'BBA (Distance)',      'duration'=>'3 Years', 'eligibility'=>'10+2 (Any Stream)'],
    ['name'=>'B.Sc (Distance)',     'duration'=>'3 Years', 'eligibility'=>'10+2 (Science)'],
    ['name'=>'MBA (Distance)',      'duration'=>'2 Years', 'eligibility'=>'Graduation (Any Stream)'],
    ['name'=>'MCA (Distance)',      'duration'=>'2 Years', 'eligibility'=>'Graduation (Any Stream)'],
    ['name'=>'MA (Distance)',       'duration'=>'2 Years', 'eligibility'=>'Graduation (Any Stream)'],
    ['name'=>'M.Com (Distance)',    'duration'=>'2 Years', 'eligibility'=>'B.Com or Equivalent'],
    ['name'=>'M.Sc (Distance)',     'duration'=>'2 Years', 'eligibility'=>'B.Sc (Relevant Stream)'],
    ['name'=>'B.Ed (Distance)',     'duration'=>'2 Years', 'eligibility'=>'Graduation (Any Stream)'],
    ['name'=>'M.Ed (Distance)',     'duration'=>'2 Years', 'eligibility'=>'B.Ed Degree'],
];
$imgs = ['c1.webp','c2.webp','c3.webp','c4.webp'];
@endphp

{{-- Hero --}}
<section class="inner-hero py-5 position-relative overflow-hidden">
    <div class="container position-relative">
        <div class="row align-items-center g-5 py-3">
            <div class="col-lg-7" data-aos="fade-right">
                <span class="section-pill mb-3 d-inline-flex">Distance Learning</span>
                <h1 class="hero-title text-white mb-3">Flexible distance programs — study from anywhere</h1>
                <p class="hero-subtitle text-white-50 mb-4">UGC-approved distance programs from top universities. Ideal for working professionals, homemakers, and students who need flexible schedules.</p>
                <div class="d-flex flex-wrap gap-3">
                    <a href="#distance-courses" class="btn btn-brand btn-lg px-4">View Programs</a>
                    <a href="{{ route('apply.create') }}" class="btn btn-outline-light btn-lg px-4">Apply Now</a>
                </div>
            </div>
            <div class="col-lg-5" data-aos="fade-left">
                <div class="pg-hero-panel">
                    <h5 class="mb-3">Why choose distance learning</h5>
                    <div class="pg-feature-list">
                        @foreach(['Study from home at your own pace','UGC-recognized degrees','No daily commute required','Ideal for working professionals'] as $h)
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
            <div class="col-6 col-lg-3" data-aos="zoom-in"><div class="pg-stat-card"><h3>{{ count($universities) }}+</h3><p>Universities</p></div></div>
            <div class="col-6 col-lg-3" data-aos="zoom-in" data-aos-delay="80"><div class="pg-stat-card"><h3>{{ count($distanceCourses) }}+</h3><p>Programs</p></div></div>
            <div class="col-6 col-lg-3" data-aos="zoom-in" data-aos-delay="160"><div class="pg-stat-card"><h3>UGC</h3><p>Recognized</p></div></div>
            <div class="col-6 col-lg-3" data-aos="zoom-in" data-aos-delay="240"><div class="pg-stat-card"><h3>100%</h3><p>Flexible</p></div></div>
        </div>
    </div>
</section>

{{-- Partner Universities --}}
<section class="py-5 bg-soft">
    <div class="container">
        <div class="section-head text-center mb-4" data-aos="fade-up">
            <span class="section-pill mb-3 d-inline-flex">Partner Universities</span>
            <h2>Universities offering distance programs</h2>
            <p class="text-muted">All universities are UGC-approved and offer recognized distance degrees.</p>
        </div>
        <div class="row g-4 justify-content-center">
            @foreach($universities as $i => $uni)
                <div class="col-12 col-sm-6 col-md-4 col-lg-3" data-aos="zoom-in" data-aos-delay="{{ ($i % 4) * 60 }}">
                    <a href="{{ route('apply.create') }}" class="university-card text-decoration-none d-block text-center p-3 h-100">
                        <div class="uni-logo-wrap mb-3">
                            <img src="{{ asset('img/college/'.$uni['img']) }}" alt="{{ $uni['name'] }}" loading="lazy">
                        </div>
                        <h6 class="mb-1">{{ $uni['name'] }}</h6>
                        <span class="badge text-bg-success small">{{ $uni['grade'] }}</span>
                    </a>
                </div>
            @endforeach
        </div>
    </div>
</section>

{{-- Distance Course Cards --}}
<section class="py-5" id="distance-courses">
    <div class="container">
        <div class="section-head text-center mb-4" data-aos="fade-up">
            <span class="section-pill mb-3 d-inline-flex">Available Programs</span>
            <h2>Distance programs at a glance</h2>
            <p class="text-muted">Duration and eligibility shown on every card.</p>
        </div>
        <div class="row g-4">
            @foreach($distanceCourses as $i => $course)
                <div class="col-sm-6 col-lg-4 col-xxl-3" data-aos="zoom-in" data-aos-delay="{{ ($i % 4) * 60 }}">
                    <div class="course-card h-100">
                        <div class="course-card-media">
                            <img src="{{ asset('img/college/'.$imgs[$i % 4]) }}" alt="{{ $course['name'] }}" loading="lazy">
                            <span class="course-badge">Distance</span>
                        </div>
                        <div class="course-card-body">
                            <h5 class="course-card-title">{{ $course['name'] }}</h5>
                            <div class="course-meta">
                                <div class="course-meta-item"><i class="fa-regular fa-clock"></i><span>{{ $course['duration'] }}</span></div>
                                <div class="course-meta-item"><i class="fa-solid fa-graduation-cap"></i><span>{{ $course['eligibility'] }}</span></div>
                            </div>
                            <a href="{{ route('apply.create') }}?course={{ urlencode($course['name']) }}" class="course-link">
                                Enquire Now <i class="fa-solid fa-arrow-right"></i>
                            </a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>

{{-- FAQ --}}
<section class="py-5 bg-soft">
    <div class="container">
        <div class="section-head text-center mb-4" data-aos="fade-up">
            <span class="section-pill mb-3 d-inline-flex">FAQ</span>
            <h2>Frequently asked questions</h2>
        </div>
        <div class="accordion custom-accordion" id="distanceFaq">
            @foreach([
                ['Are distance degrees recognized?',        'Yes — we partner with UGC-recognized universities and provide guidance on accredited distance programs.'],
                ['Can working professionals apply?',        'Absolutely — distance programs are designed for working students who need flexibility in schedule.'],
                ['How do exams work?',                      'Exam formats vary by university. We help you understand schedules, exam centers, and assessment methods.'],
                ['Is the degree valid for government jobs?','Yes, degrees from UGC-approved universities are valid for government and private sector jobs.'],
            ] as $i => $faq)
                <div class="accordion-item" data-aos="fade-up" data-aos-delay="{{ $i * 60 }}">
                    <h2 class="accordion-header">
                        <button class="accordion-button {{ $i > 0 ? 'collapsed' : '' }}" type="button"
                            data-bs-toggle="collapse" data-bs-target="#df{{ $i }}">
                            {{ $faq[0] }}
                        </button>
                    </h2>
                    <div id="df{{ $i }}" class="accordion-collapse collapse {{ $i === 0 ? 'show' : '' }}" data-bs-parent="#distanceFaq">
                        <div class="accordion-body">{{ $faq[1] }}</div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>

{{-- CTA --}}
<section class="py-5">
    <div class="container">
        <div class="pg-cta text-center" data-aos="fade-up">
            <span class="section-pill mb-3 d-inline-flex">Ready to Enrol?</span>
            <h2 class="mb-3">Start your distance learning journey today</h2>
            <p class="mb-4 text-muted">Contact our counseling team to compare universities, fees, and admission timelines.</p>
            <div class="d-flex justify-content-center flex-wrap gap-3">
                <a href="{{ route('apply.create') }}" class="btn btn-brand btn-lg px-4">Apply Now</a>
                <a href="{{ route('contact') }}" class="btn btn-outline-dark btn-lg px-4">Contact Counselor</a>
            </div>
        </div>
    </div>
</section>

@endsection
