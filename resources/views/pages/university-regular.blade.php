@extends('layouts.main')

@section('title', 'Regular University Admissions | THE NIACE')

@section('content')
@php
$universities = [
    ['name' => 'Lovely Professional University',          'grade' => 'NAAC A++', 'img' => 'u1.webp'],
    ['name' => 'Shri Venkateshwara University',           'grade' => 'UGC Approved', 'img' => 'u2.webp'],
    ['name' => 'Mahaveer University',                     'grade' => 'UGC Approved', 'img' => 'u3.webp'],
    ['name' => 'Shobhit Deemed University',               'grade' => 'NAAC A',   'img' => 'u4.webp'],
    ['name' => 'Mangalyatan University',                  'grade' => 'UGC Approved', 'img' => 'u5.webp'],
    ['name' => 'Subharti University',                     'grade' => 'NAAC A+',  'img' => 'u6.webp'],
    ['name' => 'Amarpali University',                     'grade' => 'UGC Approved', 'img' => 'u7.webp'],
    ['name' => 'Dr. A.P.J. Kalam Technical University',   'grade' => 'State University', 'img' => 'u8.webp'],
    ['name' => 'Chaudhary Charan Singh University Meerut','grade' => 'State University', 'img' => 'u9.webp'],
    ['name' => 'IIMT University',                         'grade' => 'NAAC A',   'img' => 'u10.webp'],
    ['name' => 'Board of Technical Education',            'grade' => 'Govt. Board', 'img' => 'u11.webp'],
];
@endphp

{{-- Hero --}}
<section class="inner-hero py-5 position-relative overflow-hidden">
    <div class="container position-relative">
        <div class="row align-items-center g-5 py-3">
            <div class="col-lg-7" data-aos="fade-right">
                <span class="section-pill mb-3 d-inline-flex">Regular University Programs</span>
                <h1 class="hero-title text-white mb-3">Guided admissions to {{ count($universities) }}+ top universities</h1>
                <p class="hero-subtitle text-white-50 mb-4">We connect students with UGC-approved and NAAC-accredited universities for regular on-campus degree programs — with full counseling and admission support.</p>
                <div class="d-flex flex-wrap gap-3">
                    <a href="#universities" class="btn btn-brand btn-lg px-4">View Universities</a>
                    <a href="{{ route('apply.create') }}" class="btn btn-outline-light btn-lg px-4">Apply Now</a>
                </div>
            </div>
            <div class="col-lg-5" data-aos="fade-left">
                <div class="pg-hero-panel">
                    <h5 class="mb-3">What we offer</h5>
                    <div class="pg-feature-list">
                        @foreach(['Admission guidance for regular programs','UGC & NAAC approved universities','Document verification support','1:1 counseling for course selection'] as $h)
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
            <div class="col-6 col-lg-3" data-aos="zoom-in" data-aos-delay="80"><div class="pg-stat-card"><h3>UGC</h3><p>Approved</p></div></div>
            <div class="col-6 col-lg-3" data-aos="zoom-in" data-aos-delay="160"><div class="pg-stat-card"><h3>1:1</h3><p>Counseling</p></div></div>
            <div class="col-6 col-lg-3" data-aos="zoom-in" data-aos-delay="240"><div class="pg-stat-card"><h3>100%</h3><p>Admission Help</p></div></div>
        </div>
    </div>
</section>

{{-- University Cards --}}
<section class="py-5 bg-soft" id="universities">
    <div class="container">
        <div class="section-head text-center mb-4" data-aos="fade-up">
            <span class="section-pill mb-3 d-inline-flex">Collaborated Universities</span>
            <h2>Universities we work with</h2>
            <p class="text-muted">Click any card to enquire about admissions for that university.</p>
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

{{-- Why Regular --}}
<section class="py-5">
    <div class="container">
        <div class="row g-4 align-items-center">
            <div class="col-lg-5" data-aos="fade-right">
                <div class="pg-panel h-100">
                    <span class="section-pill mb-3 d-inline-flex">Admission Process</span>
                    <h2 class="mb-3">How we help you get admitted</h2>
                    <div class="timeline">
                        @foreach(['Choose your university & course','Verify eligibility & documents','Apply with our counseling support','Complete enrollment & fee payment'] as $step)
                            <div class="timeline-item"><span>{{ $loop->iteration }}</span><h6>{{ $step }}</h6></div>
                        @endforeach
                    </div>
                </div>
            </div>
            <div class="col-lg-7" data-aos="fade-left">
                <div class="pg-panel h-100">
                    <span class="section-pill mb-3 d-inline-flex">Why Regular Programs</span>
                    <h2 class="mb-3">Benefits of on-campus learning</h2>
                    <div class="row g-3">
                        @foreach([
                            ['Campus Life',        'Access to labs, libraries, sports, and extracurricular activities.'],
                            ['Direct Faculty',     'Face-to-face interaction with experienced professors and mentors.'],
                            ['Placement Cell',     'On-campus placement drives and career development support.'],
                            ['Peer Network',       'Build lifelong connections with classmates and alumni.'],
                        ] as $b)
                            <div class="col-md-6">
                                <div class="pg-eligibility-card">
                                    <h6>{{ $b[0] }}</h6>
                                    <p class="mb-0">{{ $b[1] }}</p>
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
            <h2 class="mb-3">Start your university admission journey today</h2>
            <p class="mb-4 text-muted">Our counselors will guide you through eligibility, documents, and the right university choice.</p>
            <div class="d-flex justify-content-center flex-wrap gap-3">
                <a href="{{ route('apply.create') }}" class="btn btn-brand btn-lg px-4">Apply Now</a>
                <a href="{{ route('contact') }}" class="btn btn-outline-dark btn-lg px-4">Talk to Counselor</a>
            </div>
        </div>
    </div>
</section>

@endsection
