@extends('layouts.main')

@section('title', 'Contact | THE NIACE')

@section('content')

{{-- Hero --}}
<section class="inner-hero py-5">
    <div class="container text-center" data-aos="fade-up">
        <span class="section-pill mb-3 d-inline-flex">Get In Touch</span>
        <h1 class="text-white mb-3">Contact Us</h1>
        <p class="hero-subtitle text-white-50">Start your admission journey with expert counseling. We're here Mon–Sat, 9am–6pm.</p>
    </div>
</section>

{{-- Contact Info + Form --}}
<section class="py-5">
    <div class="container">
        <div class="row g-4">

            {{-- Left: Info Cards --}}
            <div class="col-lg-4" data-aos="fade-right">
                <div class="d-flex flex-column gap-3">

                    <div class="contact-info-card">
                        <div class="contact-info-icon">
                            <i class="fa-solid fa-phone"></i>
                        </div>
                        <div>
                            <p class="contact-info-label">Call Us</p>
                            <a href="tel:+919012027077" class="contact-info-value d-block">9012027077</a>
                            <a href="tel:+918533027077" class="contact-info-value d-block">8533027077</a>
                        </div>
                    </div>

                    <div class="contact-info-card">
                        <div class="contact-info-icon">
                            <i class="fa-solid fa-envelope"></i>
                        </div>
                        <div>
                            <p class="contact-info-label">Email Us</p>
                            <a href="mailto:customercare.thenaice@gmail.com" class="contact-info-value">
                                customercare.thenaice@gmail.com
                            </a>
                        </div>
                    </div>

                    <div class="contact-info-card">
                        <div class="contact-info-icon">
                            <i class="fa-solid fa-location-dot"></i>
                        </div>
                        <div>
                            <p class="contact-info-label">Visit Us</p>
                            <a href="https://maps.app.goo.gl/NNkvmA4bZXnP5Edt6?g_st=aw"
                               target="_blank" rel="noopener" class="contact-info-value">
                                Opposite IIMT University, Ganga Nagar Meerut-250001
                                <i class="fa-solid fa-arrow-up-right-from-square fa-xs ms-1"></i>
                            </a>
                        </div>
                    </div>

                    <div class="contact-info-card">
                        <div class="contact-info-icon">
                            <i class="fa-solid fa-clock"></i>
                        </div>
                        <div>
                            <p class="contact-info-label">Working Hours</p>
                            <span class="contact-info-value">Mon – Sat: 9:00 AM – 6:00 PM</span><br>
                            <span class="text-muted small">Sunday: Closed</span>
                        </div>
                    </div>

                    {{-- Social --}}
                    <div class="d-flex gap-2 mt-1">
                        <a href="https://www.facebook.com/share/14S91gsde8Q/" target="_blank" rel="noopener"
                           class="contact-social-btn" aria-label="Facebook">
                            <i class="fa-brands fa-facebook-f"></i>
                        </a>
                        <a href="https://www.instagram.com/the_niace?igsh=MWt0MWlueW1sY3VjMQ=="
                           target="_blank" rel="noopener"
                           class="contact-social-btn" aria-label="Instagram">
                            <i class="fa-brands fa-instagram"></i>
                        </a>
                        <a href="https://wa.me/919012027077" target="_blank" rel="noopener"
                           class="contact-social-btn" aria-label="WhatsApp">
                            <i class="fa-brands fa-whatsapp"></i>
                        </a>
                    </div>

                </div>
            </div>

            {{-- Right: Form --}}
            <div class="col-lg-8" data-aos="fade-left">
                <div class="glass-card p-4 p-md-5">
                    <h5 class="mb-1 fw-bold">Send Us a Message</h5>
                    <p class="text-muted small mb-4">Fill in the form and our team will get back to you within 24 hours.</p>

                    @if(session('success'))
                        <div class="alert alert-success d-flex align-items-center gap-2 mb-4">
                            <i class="fa-solid fa-circle-check"></i>
                            <div>{{ session('success') }}</div>
                        </div>
                    @endif

                    <form action="{{ route('contact.submit') }}" method="POST" class="mb-0">
                        @csrf
                        <div class="row g-3">
                            <div class="col-md-6">
                                <label class="form-label fw-semibold" for="contact-name">Full Name</label>
                                <input id="contact-name" name="name" type="text"
                                    class="form-control @error('name') is-invalid @enderror"
                                    placeholder="Your full name"
                                    value="{{ old('name') }}" required>
                                @error('name')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="col-md-6">
                                <label class="form-label fw-semibold" for="contact-phone">Phone</label>
                                <input id="contact-phone" name="phone" type="tel"
                                    class="form-control @error('phone') is-invalid @enderror"
                                    placeholder="10-digit mobile number"
                                    pattern="[6-9][0-9]{9}" maxlength="10"
                                    value="{{ old('phone') }}" required>
                                @error('phone')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="col-12">
                                <label class="form-label fw-semibold" for="contact-email">Email Address</label>
                                <input id="contact-email" name="email" type="email"
                                    class="form-control @error('email') is-invalid @enderror"
                                    placeholder="you@example.com"
                                    value="{{ old('email') }}" required>
                                @error('email')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="col-12">
                                <label class="form-label fw-semibold" for="contact-message">Message</label>
                                <textarea id="contact-message" name="message"
                                    class="form-control @error('message') is-invalid @enderror"
                                    rows="5"
                                    placeholder="Tell us about the course you're interested in or any questions you have…"
                                    required>{{ old('message') }}</textarea>
                                @error('message')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="col-12">
                                <button class="btn btn-brand btn-lg px-5" type="submit">
                                    <i class="fa-solid fa-paper-plane me-2"></i> Send Message
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>

        </div>
    </div>
</section>

{{-- Google Map Embed --}}
<section class="pb-5">
    <div class="container" data-aos="fade-up">
        <div class="map-embed-wrap">
            <iframe
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3489.553403822992!2d77.76093209999999!3d29.00060210000001!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x390c650324be2e85%3A0xea492cc9e2f56b96!2sNIMS!5e0!3m2!1sen!2sin!4v1780313552588!5m2!1sen!2sin"
                width="100%"
                height="420"
                style="border:0;"
                allowfullscreen=""
                loading="lazy"
                referrerpolicy="no-referrer-when-downgrade"
                title="THE NIACE Location">
            </iframe>
            <div class="map-overlay-btn">
                <a href="https://maps.app.goo.gl/NNkvmA4bZXnP5Edt6?g_st=aw"
                   target="_blank" rel="noopener"
                   class="btn btn-brand btn-sm">
                    <i class="fa-solid fa-map-location-dot me-1"></i> Open in Google Maps
                </a>
            </div>
        </div>
    </div>
</section>

@endsection
