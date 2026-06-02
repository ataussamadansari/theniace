@extends('layouts.main')

@section('title', 'THE NIACE | Empowering Students Through Modern Education')

@section('content')

@php
$featuredUG = [
    ['name'=>'B.Tech',  'duration'=>'4 Yrs / 8 Sem', 'eligibility'=>'10+2 (Any Stream)',       'img'=>'c1.webp'],
    ['name'=>'BCA',     'duration'=>'3 Yrs / 6 Sem', 'eligibility'=>'10+2 (Any Stream)',       'img'=>'c2.webp'],
    ['name'=>'B.Com',   'duration'=>'3 Yrs / 6 Sem', 'eligibility'=>'10+2 (Commerce)',         'img'=>'c3.webp'],
    ['name'=>'BBA',     'duration'=>'3 Yrs / 6 Sem', 'eligibility'=>'10+2 (Any Stream)',       'img'=>'c4.webp'],
    ['name'=>'BA',      'duration'=>'3 Yrs / 6 Sem', 'eligibility'=>'10+2 (Any Stream)',       'img'=>'c1.webp'],
    ['name'=>'B.Sc',    'duration'=>'3 Yrs / 6 Sem', 'eligibility'=>'10+2 (Science)',          'img'=>'c2.webp'],
    ['name'=>'B.Ed',    'duration'=>'2 Years',        'eligibility'=>'Graduation (Any Stream)', 'img'=>'c3.webp'],
    ['name'=>'BA LL.B', 'duration'=>'5 Yrs / 10 Sem','eligibility'=>'10+2 (Any Stream)',       'img'=>'c4.webp'],
];
$featuredPG = [
    ['name'=>'MBA',    'duration'=>'2 Yrs / Sem', 'eligibility'=>'Graduation (Any Stream)', 'img'=>'c1.webp'],
    ['name'=>'MCA',    'duration'=>'2 Yrs / Sem', 'eligibility'=>'Graduation (Any Stream)', 'img'=>'c2.webp'],
    ['name'=>'M.Tech', 'duration'=>'2 Yrs / Sem', 'eligibility'=>'B.Tech / B.E.',           'img'=>'c3.webp'],
    ['name'=>'MA',     'duration'=>'2 Yrs / Sem', 'eligibility'=>'Graduation (Any Stream)', 'img'=>'c4.webp'],
    ['name'=>'M.Com',  'duration'=>'2 Yrs / Sem', 'eligibility'=>'B.Com or Equivalent',     'img'=>'c1.webp'],
    ['name'=>'M.Sc',   'duration'=>'2 Yrs / Sem', 'eligibility'=>'B.Sc (Relevant Stream)',  'img'=>'c2.webp'],
    ['name'=>'B.Ed',   'duration'=>'2 Years',      'eligibility'=>'Graduation (Any Stream)', 'img'=>'c3.webp'],
    ['name'=>'LL.B',   'duration'=>'3 Yrs / Sem',  'eligibility'=>'Graduation (Any Stream)', 'img'=>'c4.webp'],
];
$whyUs = [
    ['icon'=>'fa-indian-rupee-sign', 'title'=>'Affordable Fees',       'desc'=>'Quality education support at transparent, student-friendly pricing.'],
    ['icon'=>'fa-briefcase',         'title'=>'Placement Support',      'desc'=>'Resume building, interview prep, and placement guidance included.'],
    ['icon'=>'fa-headset',           'title'=>'Online Support',         'desc'=>'Dedicated support team available Mon–Sat for all queries.'],
    ['icon'=>'fa-chalkboard-user',   'title'=>'Experienced Faculty',    'desc'=>'Learn from mentors with deep academic and industry experience.'],
    ['icon'=>'fa-laptop',            'title'=>'Flexible Learning',      'desc'=>'Regular, distance, and online options to suit every student.'],
];
$testimonials = [
    ['text'=>'The counseling was highly professional and clear. They helped me choose the right course without any confusion.', 'name'=>'Rahul Sharma',    'role'=>'BCA Graduate'],
    ['text'=>'Placement guidance helped me secure my first role within 3 months of completing my MBA.', 'name'=>'Priya Singh',      'role'=>'MBA Graduate'],
    ['text'=>'Faculty support and flexibility were excellent. I could manage my job and studies together.', 'name'=>'Amit Verma',       'role'=>'Distance MBA'],
    ['text'=>'Certificate verification was instant and the process was completely transparent.', 'name'=>'Neha Gupta',       'role'=>'B.Ed Graduate'],
    ['text'=>'THE NIACE team guided me through every step of the admission process. Highly recommended!', 'name'=>'Mohd. Arif',       'role'=>'B.Tech Graduate'],
];
@endphp

{{-- ═══════════════════════════════════════════
     HERO
═══════════════════════════════════════════ --}}
<section class="hero-section position-relative overflow-hidden">
    <div class="hero-blob hero-blob-1"></div>
    <div class="hero-blob hero-blob-2"></div>
    <div class="container py-5">
        <div class="row align-items-center g-5 min-vh-75">
            <div class="col-lg-6" data-aos="fade-right">
                <span class="section-pill mb-3 d-inline-flex">
                    <i class="fa-solid fa-star me-1" style="color:var(--brand-orange)"></i> Admissions Open 2025–26
                </span>
                <h1 class="hero-title">Empowering Students Through <span class="brand-accent">Modern Education</span></h1>
                <p class="hero-subtitle mt-3">THE NIACE brings together premier universities, career-first programs, and personalized mentoring to shape confident professionals.</p>
                <div class="d-flex flex-wrap gap-3 mt-4">
                    <a href="{{ route('apply.create') }}" class="btn btn-brand btn-lg px-4">
                        <i class="fa-solid fa-paper-plane me-2"></i>Apply Now
                    </a>
                    <a href="{{ route('academic.ug') }}" class="btn btn-outline-dark btn-lg px-4">Explore Courses</a>
                </div>
                <div class="d-flex flex-wrap gap-3 mt-4">
                    <a href="tel:+919012027077" class="hero-contact-chip">
                        <i class="fa-solid fa-phone text-success"></i> 9012027077
                    </a>
                    <a href="https://wa.me/919012027077" target="_blank" rel="noopener" class="hero-contact-chip">
                        <i class="fa-brands fa-whatsapp text-success"></i> WhatsApp Us
                    </a>
                </div>
            </div>
            <div class="col-lg-6" data-aos="fade-left">
                <div class="hero-visual">
                    <img src="{{ asset('img/college/c1.webp') }}"
                         class="img-fluid rounded-5 shadow-lg"
                         alt="Students at THE NIACE" loading="eager">
                    <div class="floating-card fc-1"><i class="fa-solid fa-award"></i> NAAC Aligned</div>
                    <div class="floating-card fc-2"><i class="fa-solid fa-graduation-cap"></i> Career-Ready</div>
                    <div class="floating-card fc-3"><i class="fa-solid fa-circle-check"></i> Verified Certs</div>
                </div>
            </div>
        </div>
    </div>
</section>

{{-- ═══════════════════════════════════════════
     ACHIEVEMENT COUNTERS
═══════════════════════════════════════════ --}}
<section class="py-5">
    <div class="container">
        <div class="row g-4">
            @foreach([
                ['fa-landmark',        '20',   'Years Experience'],
                ['fa-file-signature',  '1000', 'Admissions Done'],
                ['fa-building-columns','70',   'Universities'],
                ['fa-user-graduate',   '5000', 'Students Guided'],
            ] as $i => $stat)
                <div class="col-6 col-lg-3" data-aos="zoom-in" data-aos-delay="{{ $i * 80 }}">
                    <div class="achievement-card">
                        <i class="fa-solid {{ $stat[0] }}"></i>
                        <h4 class="counter" data-target="{{ $stat[1] }}">0</h4>
                        <p>{{ $stat[2] }}</p>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>

{{-- ═══════════════════════════════════════════
     TOP UNIVERSITIES SWIPER
═══════════════════════════════════════════ --}}
<section class="py-5 bg-soft">
    <div class="container">
        <div class="section-head text-center mb-4" data-aos="fade-up">
            <span class="section-pill mb-3 d-inline-flex">Our Partners</span>
            <h2>Top Universities We Work With</h2>
            <p class="text-muted">UGC-approved and NAAC-accredited institutions for quality education.</p>
        </div>
        <div class="swiper university-swiper" data-aos="fade-up" data-aos-delay="100">
            <div class="swiper-wrapper">
                @foreach($universities as $university)
                    <div class="swiper-slide">
                        <a href="{{ route('university.regular') }}" class="university-card text-decoration-none d-block text-center p-3">
                            <div class="uni-logo-wrap">
                                <img src="{{ asset($university['image']) }}" alt="{{ $university['name'] }}" loading="lazy">
                            </div>
                            <h6 class="mt-2 mb-1">{{ $university['name'] }}</h6>
                            <span class="badge text-bg-success small">{{ $university['grade'] }}</span>
                        </a>
                    </div>
                @endforeach
            </div>
            <div class="swiper-pagination mt-3"></div>
        </div>
    </div>
</section>

{{-- ═══════════════════════════════════════════
     FEATURED COURSES TABS
═══════════════════════════════════════════ --}}
<section class="py-5">
    <div class="container">
        <div class="section-head text-center mb-4" data-aos="fade-up">
            <span class="section-pill mb-3 d-inline-flex">UG & PG Programs</span>
            <h2>Featured Courses</h2>
            <p class="text-muted">Programs crafted for academic excellence and career growth.</p>
        </div>

        <ul class="nav nav-pills course-pills justify-content-center mb-4" id="courseTabs" role="tablist">
            <li class="nav-item">
                <button class="nav-link active" data-bs-toggle="pill" data-bs-target="#tab-ug" type="button">
                    <i class="fa-solid fa-graduation-cap me-1"></i> UG Courses
                </button>
            </li>
            <li class="nav-item">
                <button class="nav-link" data-bs-toggle="pill" data-bs-target="#tab-pg" type="button">
                    <i class="fa-solid fa-user-graduate me-1"></i> PG Courses
                </button>
            </li>
        </ul>

        <div class="tab-content">
            <div class="tab-pane fade show active" id="tab-ug">
                <div class="row g-4">
                    @foreach($featuredUG as $i => $course)
                        <div class="col-sm-6 col-lg-4 col-xxl-3" data-aos="fade-up" data-aos-delay="{{ ($i % 4) * 60 }}">
                            <div class="course-card h-100">
                                <div class="course-card-media">
                                    <img src="{{ asset('img/college/'.$course['img']) }}" alt="{{ $course['name'] }}" loading="lazy">
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
                <div class="text-center mt-4">
                    <a href="{{ route('academic.ug') }}" class="btn btn-outline-dark px-4">
                        View All UG Courses <i class="fa-solid fa-arrow-right ms-1"></i>
                    </a>
                </div>
            </div>

            <div class="tab-pane fade" id="tab-pg">
                <div class="row g-4">
                    @foreach($featuredPG as $i => $course)
                        <div class="col-sm-6 col-lg-4 col-xxl-3" data-aos="fade-up" data-aos-delay="{{ ($i % 4) * 60 }}">
                            <div class="course-card h-100">
                                <div class="course-card-media">
                                    <img src="{{ asset('img/college/'.$course['img']) }}" alt="{{ $course['name'] }}" loading="lazy">
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
                <div class="text-center mt-4">
                    <a href="{{ route('academic.pg') }}" class="btn btn-outline-dark px-4">
                        View All PG Courses <i class="fa-solid fa-arrow-right ms-1"></i>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>

{{-- ═══════════════════════════════════════════
     WHY CHOOSE US
═══════════════════════════════════════════ --}}
<section class="py-5 bg-soft">
    <div class="container">
        <div class="section-head text-center mb-4" data-aos="fade-up">
            <span class="section-pill mb-3 d-inline-flex">Why THE NIACE</span>
            <h2>What makes us different</h2>
        </div>
        <div class="row g-4">
            @foreach($whyUs as $i => $w)
                <div class="col-6 col-lg" data-aos="fade-up" data-aos-delay="{{ $i * 60 }}">
                    <div class="why-card h-100 p-3">
                        <i class="fa-solid {{ $w['icon'] }} fa-lg mb-2" style="color:var(--brand-orange)"></i>
                        <p class="fw-bold mb-1">{{ $w['title'] }}</p>
                        <p class="text-muted small mb-0 d-none d-md-block">{{ $w['desc'] }}</p>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>

{{-- ═══════════════════════════════════════════
     ADMISSION PROCESS
═══════════════════════════════════════════ --}}
<section class="py-5">
    <div class="container">
        <div class="row align-items-center g-5">
            <div class="col-lg-5" data-aos="fade-right">
                <span class="section-pill mb-3 d-inline-flex">How It Works</span>
                <h2 class="mb-3">Simple admission process</h2>
                <p class="text-muted mb-4">We keep the process clear so you can focus on choosing the right course and moving ahead without confusion.</p>
                <a href="{{ route('apply.create') }}" class="btn btn-brand px-4">
                    <i class="fa-solid fa-paper-plane me-2"></i> Start Your Application
                </a>
            </div>
            <div class="col-lg-7" data-aos="fade-left">
                <div class="timeline">
                    @foreach([
                        ['Apply Online',        'Fill the application form with your details and course interest.'],
                        ['Upload Documents',    'Submit your academic documents for verification.'],
                        ['Counselor Calls',     'Our team contacts you within 24 hours to guide you.'],
                        ['Fee Payment',         'Complete the admission fee as per the selected program.'],
                        ['Admission Confirmed', 'Receive your admission confirmation and begin your journey.'],
                    ] as $step)
                        <div class="timeline-item" data-aos="fade-right" data-aos-delay="{{ $loop->index * 80 }}">
                            <span>{{ $loop->iteration }}</span>
                            <div>
                                <h6 class="mb-0">{{ $step[0] }}</h6>
                                <small class="text-muted">{{ $step[1] }}</small>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</section>

{{-- ═══════════════════════════════════════════
     DIRECTOR MESSAGE
═══════════════════════════════════════════ --}}
<section class="py-5 bg-soft">
    <div class="container">
        <div class="row align-items-center g-5">
            <div class="col-lg-4 text-center" data-aos="fade-right">
                <img src="{{ asset('img/logos/ankit_malik.jpeg') }}"
                     class="img-fluid rounded-4 shadow" alt="Director Ankit Malik" loading="lazy"
                    style="width:100%; height:380px; object-fit:cover; object-position:center top;">
            </div>
            <div class="col-lg-8" data-aos="fade-left">
                <div class="quote-card">
                    <span class="section-pill mb-3 d-inline-flex">Director's Message</span>
                    <p class="fs-5 mb-3">"At THE NIACE, every learner receives a pathway that is practical, future-ready, and deeply rooted in academic integrity. We are committed to outcomes that build both confidence and competence."</p>
                    <div class="d-flex align-items-center gap-3 mt-4 pt-3 border-top">
                        <div>
                            <h6 class="mb-0 fw-bold">Ankit Malik</h6>
                            <small class="text-muted">Director & Founder, THE NIACE</small>
                        </div>
                        <a href="{{ route('about') }}" class="btn btn-outline-dark btn-sm ms-auto">Read More</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

{{-- ═══════════════════════════════════════════
     TESTIMONIALS
═══════════════════════════════════════════ --}}
<section class="py-5">
    <div class="container">
        <div class="section-head text-center mb-4" data-aos="fade-up">
            <span class="section-pill mb-3 d-inline-flex">Student Stories</span>
            <h2>What our students say</h2>
        </div>
        <div class="swiper testimonial-swiper" data-aos="fade-up">
            <div class="swiper-wrapper">
                @foreach($testimonials as $t)
                    <div class="swiper-slide h-100">
                        <div class="testimonial-card h-100">
                            <div class="mb-3">
                                @for($s = 0; $s < 5; $s++)
                                    <i class="fa-solid fa-star" style="color:#f59e0b; font-size:0.85rem;"></i>
                                @endfor
                            </div>
                            <p class="mb-3">"{{ $t['text'] }}"</p>
                            <div class="d-flex align-items-center gap-2">
                                <div class="testimonial-avatar">{{ strtoupper(substr($t['name'], 0, 1)) }}</div>
                                <div>
                                    <h6 class="mb-0 fw-bold">{{ $t['name'] }}</h6>
                                    <small class="text-muted">{{ $t['role'] }}</small>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
            <div class="swiper-pagination mt-3"></div>
        </div>
    </div>
</section>

{{-- ═══════════════════════════════════════════
     COUNTER BAND
═══════════════════════════════════════════ --}}
<section class="counter-band py-5 text-white">
    <div class="container">
        <div class="row g-4 text-center">
            @foreach([
                ['5000','Students Guided'],
                ['70',  'Universities'],
                ['80',  'Courses Offered'],
                ['20',  'Years Experience'],
            ] as $c)
                <div class="col-6 col-lg-3">
                    <h3 class="counter" data-target="{{ $c[0] }}">0</h3>
                    <p class="mb-0">{{ $c[1] }}</p>
                </div>
            @endforeach
        </div>
    </div>
</section>

{{-- ═══════════════════════════════════════════
     FAQ
═══════════════════════════════════════════ --}}
<section class="py-5 bg-soft">
    <div class="container">
        <div class="section-head text-center mb-4" data-aos="fade-up">
            <span class="section-pill mb-3 d-inline-flex">FAQ</span>
            <h2>Frequently Asked Questions</h2>
        </div>
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <div class="accordion custom-accordion" id="faqAccordion">
                    @foreach([
                        ['How can I apply?',                    'Fill the Apply Now form on our website. Our counseling team will contact you within 24 hours to guide you through the process.'],
                        ['Do you provide placement support?',   'Yes — resume building, interview preparation, and placement guidance are part of our student support services.'],
                        ['Can I verify certificates online?',   'Yes. Use the Certificate Verification page to instantly validate any THE NIACE certificate by entering the certificate number.'],
                        ['Are distance degrees recognized?',    'Yes. We partner with UGC-approved universities and all degrees are recognized for government and private sector employment.'],
                        ['What courses are available?',         'We offer UG, PG, Computer, and Certification programs across 80+ courses. Visit the Academic section to explore all options.'],
                    ] as $i => $faq)
                        <div class="accordion-item" data-aos="fade-up" data-aos-delay="{{ $i * 60 }}">
                            <h2 class="accordion-header">
                                <button class="accordion-button {{ $i > 0 ? 'collapsed' : '' }}" type="button"
                                    data-bs-toggle="collapse" data-bs-target="#faq{{ $i }}">
                                    {{ $faq[0] }}
                                </button>
                            </h2>
                            <div id="faq{{ $i }}" class="accordion-collapse collapse {{ $i === 0 ? 'show' : '' }}"
                                data-bs-parent="#faqAccordion">
                                <div class="accordion-body">{{ $faq[1] }}</div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</section>

{{-- ═══════════════════════════════════════════
     FINAL CTA BAND
═══════════════════════════════════════════ --}}
<section class="py-5">
    <div class="container">
        <div class="home-cta-band" data-aos="fade-up">
            <div class="row align-items-center g-4">
                <div class="col-lg-8">
                    <h2 class="mb-2">Ready to start your education journey?</h2>
                    <p class="mb-0 text-muted">Apply now or talk to our counselors — we'll guide you every step of the way.</p>
                </div>
                <div class="col-lg-4 text-lg-end d-flex flex-wrap gap-2 justify-content-lg-end">
                    <a href="{{ route('apply.create') }}" class="btn btn-brand btn-lg px-4">Apply Now</a>
                    <a href="https://wa.me/919012027077" target="_blank" rel="noopener" class="btn btn-success btn-lg px-4">
                        <i class="fa-brands fa-whatsapp me-1"></i> WhatsApp
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection
