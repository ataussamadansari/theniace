@extends('layouts.main')

@section('title', 'College | THE NIACE')

@section('content')
@php
$colleges = [
    ['name' => 'Forte Group of Institution',          'img' => 'asset 1.webp'],
    ['name' => 'Translam Group of Institutions',      'img' => 'asset 2.webp'],
    ['name' => 'ABSS Institute of Technology',        'img' => 'asset 3.webp'],
    ['name' => 'Mahendra Institute of Technology',    'img' => 'asset 4.webp'],
    ['name' => 'BIT Group of Institutions',           'img' => 'asset 5.webp'],
    ['name' => 'Dewan Group of Institution',          'img' => 'asset 6.webp'],
    ['name' => 'MIET Institute',                      'img' => 'asset 7.webp'],
    ['name' => 'GN Group of Institute',               'img' => 'asset 8.webp'],
    ['name' => 'ABESIT Group of Institutions',        'img' => 'asset 9.webp'],
    ['name' => 'Vishveshwarya Group of Institutions', 'img' => 'asset 10.webp'],
];
@endphp

{{-- Hero --}}
<section class="inner-hero college-hero py-5 position-relative overflow-hidden">
    <div class="container position-relative">
        <div class="row align-items-center g-5 py-3">
            <div class="col-lg-7" data-aos="fade-right">
                <span class="section-pill mb-3 d-inline-flex">Regular College Support</span>
                <h1 class="hero-title text-white mb-3">Admission support for {{ count($colleges) }}+ top colleges</h1>
                <p class="hero-subtitle text-white-50 mb-4">We guide students to the right colleges for quality on-campus education — with transparent admission assistance and counseling at every step.</p>
                <div class="d-flex flex-wrap gap-3">
                    <a href="#colleges" class="btn btn-brand btn-lg px-4">View Colleges</a>
                    <a href="{{ route('apply.create') }}" class="btn btn-outline-light btn-lg px-4">Apply Now</a>
                </div>
            </div>
            <div class="col-lg-5" data-aos="fade-left">
                <div class="college-panel">
                    <h5 class="mb-3">What we support</h5>
                    <div class="college-feature-list">
                        @foreach(['Guidance for regular college admissions','Support for shortlist, eligibility, and enrollment','Transparent and student-friendly admission assistance','Best-fit college matching for every student'] as $h)
                            <div class="college-feature-item"><i class="fa-solid fa-circle-check"></i><span>{{ $h }}</span></div>
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
            <div class="col-6 col-lg-3" data-aos="zoom-in"><div class="college-stat-card"><h3>{{ count($colleges) }}+</h3><p>Colleges</p></div></div>
            <div class="col-6 col-lg-3" data-aos="zoom-in" data-aos-delay="80"><div class="college-stat-card"><h3>On-Campus</h3><p>Programs</p></div></div>
            <div class="col-6 col-lg-3" data-aos="zoom-in" data-aos-delay="160"><div class="college-stat-card"><h3>Guided</h3><p>Admissions</p></div></div>
            <div class="col-6 col-lg-3" data-aos="zoom-in" data-aos-delay="240"><div class="college-stat-card"><h3>1:1</h3><p>Counseling</p></div></div>
        </div>
    </div>
</section>

{{-- College Cards --}}
<section class="py-5 bg-soft" id="colleges">
    <div class="container">
        <div class="section-head text-center mb-4" data-aos="fade-up">
            <span class="section-pill mb-3 d-inline-flex">Collaborated Colleges</span>
            <h2>Colleges we support admissions for</h2>
            <p class="text-muted">Click any college card to enquire about admissions.</p>
        </div>
        <div class="row g-4 justify-content-center">
            @foreach($colleges as $i => $college)
                <div class="col-12 col-sm-6 col-lg-4 col-xxl-3" data-aos="zoom-in" data-aos-delay="{{ ($i % 4) * 60 }}">
                    <a href="{{ route('apply.create') }}" class="college-card h-100 text-decoration-none d-block">
                        <img src="{{ asset('img/college/'.$college['img']) }}" alt="{{ $college['name'] }}" loading="lazy">
                        <h5>{{ $college['name'] }}</h5>
                    </a>
                </div>
            @endforeach
        </div>
    </div>
</section>

{{-- Process + Info --}}
<section class="py-5">
    <div class="container">
        <div class="row g-4 align-items-start">
            <div class="col-lg-5" data-aos="fade-right">
                <div class="college-panel h-100">
                    <span class="section-pill mb-3 d-inline-flex">Admission Flow</span>
                    <h2 class="mb-3">How the college support process works</h2>
                    <div class="timeline">
                        @foreach(['Browse the listed colleges','Shortlist based on course and campus preference','Check eligibility and documentation','Proceed with counseling and admission support'] as $step)
                            <div class="timeline-item"><span>{{ $loop->iteration }}</span><h6>{{ $step }}</h6></div>
                        @endforeach
                    </div>
                </div>
            </div>
            <div class="col-lg-7" data-aos="fade-left">
                <div class="college-panel h-100">
                    <span class="section-pill mb-3 d-inline-flex">Our Support</span>
                    <h2 class="mb-3">Support that feels clear and direct</h2>
                    <div class="row g-3">
                        @foreach([
                            ['College Selection',     'We help match students with the right college based on preference, stream, and admission needs.'],
                            ['Transparent Guidance',  'Everything is explained simply so students and parents can make informed decisions.'],
                            ['Admission Support',     'From document checks to enrollment help, the process stays organized and student-friendly.'],
                            ['Best-fit Approach',     'The goal is to reduce confusion and quickly get you to the right campus option.'],
                        ] as $info)
                            <div class="col-md-6">
                                <div class="college-info-card">
                                    <h6>{{ $info[0] }}</h6>
                                    <p class="mb-0">{{ $info[1] }}</p>
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
        <div class="college-cta text-center" data-aos="fade-up">
            <span class="section-pill mb-3 d-inline-flex">Need Help?</span>
            <h2 class="mb-3">We can help you choose the right college</h2>
            <p class="mb-4 text-muted">Reach out for admission support, shortlist help, and college-specific guidance.</p>
            <div class="d-flex justify-content-center flex-wrap gap-3">
                <a href="{{ route('apply.create') }}" class="btn btn-brand btn-lg px-4">Apply Now</a>
                <a href="{{ route('contact') }}" class="btn btn-outline-dark btn-lg px-4">Contact Counselor</a>
            </div>
        </div>
    </div>
</section>

@endsection
