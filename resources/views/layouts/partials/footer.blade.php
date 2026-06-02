<footer class="footer-section text-white pt-5 pb-0 mt-5">
    <div class="container">

        {{-- Top Row --}}
        <div class="row g-5 pb-5">

            {{-- Brand + About --}}
            <div class="col-lg-4 col-md-6">
               <a href="{{ route('home') }}" class="text-decoration-none d-inline-block mb-3">
    <img src="{{ asset('img/logos/the_niace.png') }}"
         alt="THE NIACE"
         style="height:100px; width:auto;">
</a>
                <p class="text-white-50 mb-4" style="line-height:1.8">
                    A trusted education partner helping students build strong careers through modern, practical, and affordable learning paths since 2004.
                </p>
                {{-- Social --}}
                <div class="d-flex gap-2 mb-4">
                    <a href="https://www.facebook.com/share/14S91gsde8Q/" target="_blank" rel="noopener"
                       class="footer-social-btn" aria-label="Facebook">
                        <i class="fa-brands fa-facebook-f"></i>
                    </a>
                    <a href="https://www.instagram.com/the_niace?igsh=MWt0MWlueW1sY3VjMQ=="
                       target="_blank" rel="noopener"
                       class="footer-social-btn" aria-label="Instagram">
                        <i class="fa-brands fa-instagram"></i>
                    </a>
                    <a href="https://wa.me/919012027077" target="_blank" rel="noopener"
                       class="footer-social-btn" aria-label="WhatsApp">
                        <i class="fa-brands fa-whatsapp"></i>
                    </a>
                    <a href="#" class="footer-social-btn" aria-label="YouTube">
                        <i class="fa-brands fa-youtube"></i>
                    </a>
                </div>
                {{-- Apply CTA --}}
                <a href="{{ route('apply.create') }}" class="btn btn-brand px-4">
                    <i class="fa-solid fa-paper-plane me-2"></i> Apply Now
                </a>
            </div>

            {{-- Quick Links + Courses --}}
            <div class="col-lg-4 col-md-6">
                <div class="row g-4">
                    <div class="col-6">
                        <h6 class="footer-heading">Quick Links</h6>
                        <ul class="list-unstyled footer-links">
                            <li><a href="{{ route('home') }}">Home</a></li>
                            <li><a href="{{ route('about') }}">About Us</a></li>
                            <li><a href="{{ route('college') }}">College</a></li>
                            <li><a href="{{ route('university.regular') }}">University</a></li>
                            <li><a href="{{ route('certificate.verification') }}">Verify Certificate</a></li>
                            <li><a href="{{ route('contact') }}">Contact</a></li>
                        </ul>
                    </div>
                    <div class="col-6">
                        <h6 class="footer-heading">Courses</h6>
                        <ul class="list-unstyled footer-links">
                            <li><a href="{{ route('academic.ug') }}">UG Courses</a></li>
                            <li><a href="{{ route('academic.pg') }}">PG Courses</a></li>
                            <li><a href="{{ route('academic.computer') }}">Computer Courses</a></li>
                            <li><a href="{{ route('academic.certification') }}">Certification</a></li>
                            <li><a href="{{ route('university.distance') }}">Distance Learning</a></li>
                            <li><a href="{{ route('apply.create') }}">Apply Now</a></li>
                        </ul>
                    </div>
                </div>
            </div>

            {{-- Contact Info --}}
            <div class="col-lg-4 col-md-12">
                <h6 class="footer-heading">Get In Touch</h6>
                <ul class="list-unstyled footer-contact-list">
                    <li>
                        <span class="footer-contact-icon"><i class="fa-solid fa-phone"></i></span>
                        <div>
                            <a href="tel:+919012027077">9012027077</a><br>
                            <a href="tel:+918533027077">8533027077</a>
                        </div>
                    </li>
                    <li>
                        <span class="footer-contact-icon"><i class="fa-solid fa-envelope"></i></span>
                        <a href="mailto:customercare.thenaice@gmail.com">customercare.thenaice@gmail.com</a>
                    </li>
                    <li>
                        <span class="footer-contact-icon"><i class="fa-solid fa-location-dot"></i></span>
                        <a href="https://maps.app.goo.gl/NNkvmA4bZXnP5Edt6?g_st=aw" target="_blank" rel="noopener">
                            Opposite IIMT University, Ganga Nagar Meerut-250001
                            <i class="fa-solid fa-arrow-up-right-from-square fa-xs ms-1 opacity-50"></i>
                        </a>
                    </li>
                    <li>
                        <span class="footer-contact-icon"><i class="fa-solid fa-clock"></i></span>
                        <span>Mon – Sat: 9:00 AM – 6:00 PM</span>
                    </li>
                </ul>

                {{-- Newsletter --}}
                <!-- <div class="mt-4">
                    <p class="text-white-50 small mb-2">Subscribe for updates & admission alerts:</p>
                    <form class="newsletter-form" action="#" method="post">
                        @csrf
                        <div class="input-group">
                            <input type="email" class="form-control bg-transparent text-white border-secondary"
                                   placeholder="Your email address" required
                                   style="border-right:0;">
                            <button class="btn btn-brand" type="submit">Join</button>
                        </div>
                    </form>
                </div> -->
            </div>

        </div>

        {{-- Bottom Bar --}}
        <div class="footer-bottom">
            <div class="d-flex flex-column flex-md-row justify-content-between align-items-center gap-2">
                <span class="text-white-50 small">
                    &copy; {{ date('Y') }} <strong class="text-white">THE NIACE</strong>. All Rights Reserved.
                </span>
                <div class="d-flex gap-3">
                    <a href="{{ route('certificate.verification') }}" class="text-white-50 small text-decoration-none footer-bottom-link">Certificate Verification</a>
                    <a href="{{ route('contact') }}" class="text-white-50 small text-decoration-none footer-bottom-link">Contact Us</a>
                    <span class="text-white-50 small">theniace.com</span>
                </div>
            </div>
        </div>

    </div>
</footer>
