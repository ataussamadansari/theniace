@extends('layouts.main')

@section('title', 'About Us | THE NIACE')
@section('meta_description', 'THE NIACE — With 20+ years of expertise, we make quality education accessible through UG, PG, Computer, and Certification programs. 70+ university partners, 5000+ students guided.')

@section('content')

{{-- ═══════════════════════════════════════════
     HERO
═══════════════════════════════════════════ --}}
<section class="inner-hero py-5 position-relative overflow-hidden">
    <div class="container position-relative">
        <div class="row align-items-center g-5 py-3">
            <div class="col-lg-7" data-aos="fade-right">
                <span class="section-pill mb-3 d-inline-flex">About Us</span>
                <h1 class="hero-title text-white mb-3">Welcome to THE NIACE</h1>
                <p class="hero-subtitle text-white-50 mb-2">Where quality education, trust, and innovation come together.</p>
                <p class="text-white-50 mb-4" style="line-height:1.8; font-size:1rem;">
                    We are committed to providing skill-based learning, certified courses, and transparent verification systems that help students build a strong and reliable future. Our mission is not only to educate but also to ensure authenticity, credibility, and recognition of every certificate we issue.
                </p>
                <div class="d-flex flex-wrap gap-3">
                    <a href="{{ route('apply.create') }}" class="btn btn-brand btn-lg px-4">
                        <i class="fa-solid fa-paper-plane me-2"></i>Apply Now
                    </a>
                    <a href="{{ route('contact') }}" class="btn btn-outline-light btn-lg px-4">Talk to Counselor</a>
                </div>
            </div>
            <div class="col-lg-5" data-aos="fade-left">
                <div class="pg-hero-panel">
                    <h5 class="mb-3">What sets us apart</h5>
                    <div class="pg-feature-list">
                        @foreach([
                            'Government & industry-oriented courses',
                            '100% genuine & verifiable certificates',
                            'Easy online certificate verification system',
                            'Experienced faculty & mentors',
                            'Student-focused learning approach',
                        ] as $point)
                            <div class="pg-feature-item">
                                <i class="fa-solid fa-circle-check"></i>
                                <span>{{ $point }}</span>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

{{-- ═══════════════════════════════════════════
     GROWING STRONGER — Stats
═══════════════════════════════════════════ --}}
<section class="py-5">
    <div class="container">
        <div class="row align-items-center g-5">
            <div class="col-lg-5" data-aos="fade-right">
                <span class="section-pill mb-3 d-inline-flex">Growing Every Day</span>
                <h2 class="mb-3">We are growing stronger everyday</h2>
                <p class="text-muted mb-4">THE NIACE has been empowering students through quality education for over 20 years. Our strong network of partners and trusted reputation continues to grow, helping learners achieve success from anywhere in India.</p>
                <div class="row g-3">
                    @foreach([
                        ['20+',   'Years of Experience'],
                        ['5000+', 'Students Guided'],
                        ['70+',   'University Partners'],
                        ['1000+', 'Admissions Done'],
                    ] as $s)
                        <div class="col-6">
                            <div class="about-stat-mini">
                                <h3 class="mb-0" style="color:var(--brand-orange)">{{ $s[0] }}</h3>
                                <p class="mb-0 text-muted small">{{ $s[1] }}</p>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
            <div class="col-lg-7" data-aos="fade-left">
                <div class="row g-3">
                    @foreach([
                        ['fa-building-columns', 'Education Services',      'Highest ranked universities in their region, offering recognized degree programs.'],
                        ['fa-laptop',           'Flexible Learning',        'Flexible regular and distance programs across all disciplines and streams.'],
                        ['fa-indian-rupee-sign','Affordable & Accessible',  'Accessible learning with affordable fee structures for every type of student.'],
                        ['fa-chalkboard-user',  'Expert-Led Instruction',   'Experienced faculty with real-world industry knowledge and academic expertise.'],
                    ] as $i => $f)
                        <div class="col-sm-6" data-aos="zoom-in" data-aos-delay="{{ $i * 80 }}">
                            <div class="about-offer-card h-100">
                                <div class="about-offer-icon">
                                    <i class="fa-solid {{ $f[0] }}"></i>
                                </div>
                                <h6 class="fw-bold mb-1">{{ $f[1] }}</h6>
                                <p class="text-muted small mb-0">{{ $f[2] }}</p>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</section>

{{-- ═══════════════════════════════════════════
     WHAT MAKES US SPECIAL
═══════════════════════════════════════════ --}}
<section class="py-5 bg-soft">
    <div class="container">
        <div class="row align-items-center g-5">
            <div class="col-lg-6" data-aos="fade-right">
                <img src="{{ asset('img/college/c2.webp') }}"
                     class="img-fluid rounded-4 shadow"
                     alt="THE NIACE Education" loading="lazy"
                     style="width:100%; max-height:400px; object-fit:cover;">
            </div>
            <div class="col-lg-6" data-aos="fade-left">
                <span class="section-pill mb-3 d-inline-flex">What Makes Us Special</span>
                <h2 class="mb-3">Dedicated to making education accessible to everyone</h2>
                <p class="text-muted mb-4">With over 20 years of expertise, THE NIACE is dedicated to making education accessible to everyone through regular, distance, and online learning. We partner with top universities approved by UGC and NAAC, offering flexible programs tailored for modern learners.</p>
                <p class="text-muted mb-4">Our trusted network of educators, interactive learning tools, and industry-aligned curriculum ensure students get quality education with career-ready skills. We support students with resources like career counseling, job assistance, and a commitment to lifelong learning that sets us apart.</p>
                <div class="row g-3">
                    @foreach([
                        ['fa-award',            '20+ Years Experience',      'A trusted name in higher education for over two decades.'],
                        ['fa-handshake',        '70+ Collaborations',        'Partners with top universities to enhance learning and career growth.'],
                        ['fa-graduation-cap',   'UG & PG Programs',          'Wide range of UGC-recognized undergraduate and postgraduate programs.'],
                        ['fa-briefcase',        'Career-Focused Learning',   'Curriculum blending academic excellence with industry-relevant skills.'],
                        ['fa-headset',          'Student-Centered Support',  'Expert counseling and academic help from admission to completion.'],
                    ] as $i => $sp)
                        <div class="col-12" data-aos="fade-up" data-aos-delay="{{ $i * 50 }}">
                            <div class="d-flex align-items-start gap-3">
                                <div class="about-offer-icon flex-shrink-0" style="width:40px;height:40px;border-radius:10px;font-size:1rem;">
                                    <i class="fa-solid {{ $sp[0] }}"></i>
                                </div>
                                <div>
                                    <h6 class="fw-bold mb-0">{{ $sp[1] }}</h6>
                                    <p class="text-muted small mb-0">{{ $sp[2] }}</p>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</section>

{{-- ═══════════════════════════════════════════
     MISSION + WHY CHOOSE US
═══════════════════════════════════════════ --}}
<section class="py-5">
    <div class="container">
        <div class="row g-4">

            {{-- Mission --}}
            <div class="col-lg-6" data-aos="fade-right">
                <div class="about-vm-card h-100">
                    <div class="about-vm-icon">
                        <i class="fa-solid fa-bullseye"></i>
                    </div>
                    <h3 class="mb-4">Our Mission</h3>
                    <div class="d-flex flex-column gap-3">
                        @foreach([
                            'To guide students towards the right college and course',
                            'To ensure fair, transparent, and genuine admission support',
                            'To help students access scholarships and educational benefits',
                            'To simplify the admission process for students and parents',
                            'To deliver quality programs through strong university partnerships',
                        ] as $m)
                            <div class="d-flex align-items-start gap-3">
                                <i class="fa-solid fa-circle-check mt-1 flex-shrink-0" style="color:var(--brand-orange)"></i>
                                <span class="text-muted">{{ $m }}</span>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>

            {{-- Why Choose Us --}}
            <div class="col-lg-6" data-aos="fade-left">
                <div class="about-vm-card h-100">
                    <div class="about-vm-icon">
                        <i class="fa-solid fa-star"></i>
                    </div>
                    <h3 class="mb-4">Why Choose Us</h3>
                    <div class="d-flex flex-column gap-3">
                        @foreach([
                            'Government & industry-oriented courses',
                            '100% genuine & verifiable certificates',
                            'Easy online certificate verification system',
                            'Experienced faculty & mentors',
                            'Student-focused learning approach',
                            'Affordable fee structure for all programs',
                            'Dedicated counseling from admission to completion',
                        ] as $w)
                            <div class="d-flex align-items-start gap-3">
                                <i class="fa-solid fa-check-circle mt-1 flex-shrink-0" style="color:var(--brand-orange)"></i>
                                <span class="text-muted">{{ $w }}</span>
                            </div>
                        @endforeach
                    </div>
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
                     style="max-height:380px; object-fit:cover; width:100%;  object-position:center top;" >
                <div class="mt-3">
                    <h5 class="mb-0 fw-bold">Ankit Malik</h5>
                    <p class="text-muted small mb-0">Director & Founder, THE NIACE</p>
                </div>
            </div>
            <div class="col-lg-8" data-aos="fade-left">
                <div class="quote-card">
                    <span class="section-pill mb-3 d-inline-flex">Director's Message</span>
                    <i class="fa-solid fa-quote-left fa-2x mb-3 d-block" style="color:var(--brand-orange); opacity:0.3"></i>
                    <p class="fs-5 mb-3 text-muted">"At THE NIACE, every learner receives a pathway that is practical, future-ready, and deeply rooted in academic integrity. We are committed to outcomes that build both confidence and competence."</p>
                    <p class="text-muted mb-3">"Our partnerships with leading universities and our dedicated counseling team ensure that no student is left without direction. We believe education should open doors — and we work every day to make that happen."</p>
                    <p class="text-muted mb-0">"Whether you are a fresh 12th pass student, a working professional seeking a degree, or someone looking to upskill — THE NIACE has a program and a counselor ready to guide you."</p>
                    <div class="mt-4 pt-3 border-top d-flex gap-3 flex-wrap">
                        <a href="{{ route('apply.create') }}" class="btn btn-brand px-4">Apply Now</a>
                        <a href="{{ route('contact') }}" class="btn btn-outline-dark px-4">Contact Us</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

{{-- ═══════════════════════════════════════════
     OUR COMMITMENT
═══════════════════════════════════════════ --}}
<section class="py-5">
    <div class="container">
        <div class="home-cta-band" data-aos="fade-up">
            <div class="row align-items-center g-4">
                <div class="col-lg-8">
                    <span class="section-pill mb-3 d-inline-flex">Our Commitment</span>
                    <h2 class="mb-2">Every student deserves the right education</h2>
                    <p class="mb-0 text-muted">THE NIACE is committed to guiding students with integrity, accuracy, and responsibility — ensuring long-term academic and career success. Providing barrier-free education, covering all states in India with 70+ partners.</p>
                </div>
                <div class="col-lg-4 text-lg-end d-flex flex-wrap gap-2 justify-content-lg-end">
                    <a href="{{ route('apply.create') }}" class="btn btn-brand btn-lg px-4">Apply Now</a>
                    <a href="{{ route('contact') }}" class="btn btn-outline-dark btn-lg px-4">Contact Us</a>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection
