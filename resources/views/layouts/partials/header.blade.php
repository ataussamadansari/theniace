{{-- ═══════════════ TOPBAR ═══════════════ --}}
<header class="topbar bg-dark text-white py-2 d-none d-md-block">
    <div class="container d-flex flex-wrap align-items-center justify-content-between gap-2">
        <div class="d-flex align-items-center gap-3 small">
            <a href="tel:+919012027077" class="topbar-link"><i class="fa-solid fa-phone me-1"></i> 9012027077</a>
            <a href="tel:+918533027077" class="topbar-link"><i class="fa-solid fa-phone me-1"></i> 8533027077</a>
            <a href="mailto:customercare.thenaice@gmail.com" class="topbar-link"><i class="fa-solid fa-envelope me-1"></i> customercare.thenaice@gmail.com</a>
        </div>
        <div class="d-flex align-items-center gap-2">
            <a href="https://www.facebook.com/share/14S91gsde8Q/" target="_blank" rel="noopener" class="social-link" aria-label="Facebook"><i class="fa-brands fa-facebook-f"></i></a>
            <a href="https://www.instagram.com/the_niace?igsh=MWt0MWlueW1sY3VjMQ==" target="_blank" rel="noopener" class="social-link" aria-label="Instagram"><i class="fa-brands fa-instagram"></i></a>
            <a href="https://wa.me/919012027077" target="_blank" rel="noopener" class="social-link" aria-label="WhatsApp"><i class="fa-brands fa-whatsapp"></i></a>
            <a href="#" class="social-link" aria-label="YouTube"><i class="fa-brands fa-youtube"></i></a>
        </div>
    </div>
</header>

{{-- ═══════════════ NAVBAR ═══════════════ --}}
<nav class="navbar navbar-expand-lg sticky-top custom-navbar" id="siteNavbar">
    <div class="container">

        {{-- Logo --}}
        <a class="navbar-brand d-flex align-items-center" href="{{ route('home') }}">
            <img src="{{ asset('img/logos/the_niace.png') }}" alt="THE NIACE"
                 style="height:70px; width:auto; object-fit:contain;">
        </a>

        {{-- Mobile hamburger --}}
        <button class="drawer-toggle d-lg-none" id="drawerOpen" aria-label="Open menu">
            <span></span><span></span><span></span>
        </button>

        {{-- Desktop nav --}}
        <div class="collapse navbar-collapse d-none d-lg-flex align-items-center">
            <ul class="navbar-nav mx-auto gap-lg-1">
                <li class="nav-item">
                    <a class="nav-link {{ request()->routeIs('home') ? 'active' : '' }}" href="{{ route('home') }}">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ request()->routeIs('about') ? 'active' : '' }}" href="{{ route('about') }}">About</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle {{ request()->routeIs('academic.*') ? 'active' : '' }}"
                       href="#" role="button" data-bs-toggle="dropdown">Academic</a>
                    <ul class="dropdown-menu custom-dropdown">
                        <li><a class="dropdown-item" href="{{ route('academic.ug') }}">UG Courses</a></li>
                        <li><a class="dropdown-item" href="{{ route('academic.pg') }}">PG Courses</a></li>
                        <li><a class="dropdown-item" href="{{ route('academic.computer') }}">Computer Courses</a></li>
                        <li><a class="dropdown-item" href="{{ route('academic.certification') }}">Certification</a></li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ request()->routeIs('certificate.verification') ? 'active' : '' }}"
                       href="{{ route('certificate.verification') }}">Verify Certificate</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ request()->routeIs('college') ? 'active' : '' }}"
                       href="{{ route('college') }}">College</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle {{ request()->routeIs('university.*') ? 'active' : '' }}"
                       href="#" role="button" data-bs-toggle="dropdown">University</a>
                    <ul class="dropdown-menu custom-dropdown">
                        <li><a class="dropdown-item" href="{{ route('university.regular') }}">Regular</a></li>
                        <li><a class="dropdown-item" href="{{ route('university.distance') }}">Distance</a></li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ request()->routeIs('contact') ? 'active' : '' }}"
                       href="{{ route('contact') }}">Contact</a>
                </li>
            </ul>
            <a href="{{ route('apply.create') }}" class="btn btn-brand ms-2">Apply Now</a>
        </div>

    </div>
</nav>

{{-- ═══════════════ MOBILE DRAWER ═══════════════ --}}
{{-- Backdrop --}}
<div class="drawer-backdrop" id="drawerBackdrop"></div>

{{-- Drawer panel --}}
<div class="drawer-panel" id="drawerPanel">

    {{-- Header --}}
    <div class="drawer-header">
        <img src="{{ asset('img/logos/the_niace.png') }}" alt="THE NIACE"
             style="height:50px; width:auto; object-fit:contain;">
        <button class="drawer-close" id="drawerClose" aria-label="Close">
            <i class="fa-solid fa-xmark"></i>
        </button>
    </div>

    {{-- Contact strip --}}
    <div class="drawer-contact-strip">
        <a href="tel:+919012027077"><i class="fa-solid fa-phone me-1"></i> 9012027077</a>
        <a href="mailto:customercare.thenaice@gmail.com"><i class="fa-solid fa-envelope me-1"></i> Email Us</a>
    </div>

    {{-- Nav links --}}
    <nav class="drawer-nav">

        <a href="{{ route('home') }}" class="drawer-link {{ request()->routeIs('home') ? 'drawer-active' : '' }}">
            <i class="fa-solid fa-house"></i> Home
        </a>

        <a href="{{ route('about') }}" class="drawer-link {{ request()->routeIs('about') ? 'drawer-active' : '' }}">
            <i class="fa-solid fa-circle-info"></i> About Us
        </a>

        {{-- Academic accordion --}}
        <div class="drawer-accordion">
            <button class="drawer-accordion-btn {{ request()->routeIs('academic.*') ? 'drawer-active' : '' }}"
                    data-target="acc-academic">
                <span><i class="fa-solid fa-graduation-cap"></i> Academic</span>
                <i class="fa-solid fa-chevron-down drawer-chevron"></i>
            </button>
            <div class="drawer-accordion-body" id="acc-academic">
                <a href="{{ route('academic.ug') }}" class="drawer-sub-link">UG Courses</a>
                <a href="{{ route('academic.pg') }}" class="drawer-sub-link">PG Courses</a>
                <a href="{{ route('academic.computer') }}" class="drawer-sub-link">Computer Courses</a>
                <a href="{{ route('academic.certification') }}" class="drawer-sub-link">Certification</a>
            </div>
        </div>

        <a href="{{ route('certificate.verification') }}"
           class="drawer-link {{ request()->routeIs('certificate.verification') ? 'drawer-active' : '' }}">
            <i class="fa-solid fa-shield-check"></i> Verify Certificate
        </a>

        <a href="{{ route('college') }}" class="drawer-link {{ request()->routeIs('college') ? 'drawer-active' : '' }}">
            <i class="fa-solid fa-school"></i> College
        </a>

        {{-- University accordion --}}
        <div class="drawer-accordion">
            <button class="drawer-accordion-btn {{ request()->routeIs('university.*') ? 'drawer-active' : '' }}"
                    data-target="acc-university">
                <span><i class="fa-solid fa-building-columns"></i> University</span>
                <i class="fa-solid fa-chevron-down drawer-chevron"></i>
            </button>
            <div class="drawer-accordion-body" id="acc-university">
                <a href="{{ route('university.regular') }}" class="drawer-sub-link">Regular Programs</a>
                <a href="{{ route('university.distance') }}" class="drawer-sub-link">Distance Learning</a>
            </div>
        </div>

        <a href="{{ route('contact') }}" class="drawer-link {{ request()->routeIs('contact') ? 'drawer-active' : '' }}">
            <i class="fa-solid fa-phone-volume"></i> Contact
        </a>

    </nav>

    {{-- CTA --}}
    <div class="drawer-footer">
        <a href="{{ route('apply.create') }}" class="btn btn-brand w-100 mb-3">
            <i class="fa-solid fa-paper-plane me-2"></i> Apply Now
        </a>
        <div class="d-flex justify-content-center gap-3">
            <a href="https://www.facebook.com/share/14S91gsde8Q/" target="_blank" rel="noopener" class="drawer-social"><i class="fa-brands fa-facebook-f"></i></a>
            <a href="https://www.instagram.com/the_niace?igsh=MWt0MWlueW1sY3VjMQ==" target="_blank" rel="noopener" class="drawer-social"><i class="fa-brands fa-instagram"></i></a>
            <a href="https://wa.me/919012027077" target="_blank" rel="noopener" class="drawer-social"><i class="fa-brands fa-whatsapp"></i></a>
        </div>
    </div>

</div>

{{-- ═══════════════ SCRIPTS ═══════════════ --}}
<script>
(function () {
    const openBtn    = document.getElementById('drawerOpen');
    const closeBtn   = document.getElementById('drawerClose');
    const panel      = document.getElementById('drawerPanel');
    const backdrop   = document.getElementById('drawerBackdrop');

    function open()  { panel.classList.add('open'); backdrop.classList.add('show'); document.body.style.overflow = 'hidden'; }
    function close() { panel.classList.remove('open'); backdrop.classList.remove('show'); document.body.style.overflow = ''; }

    openBtn.addEventListener('click', open);
    closeBtn.addEventListener('click', close);
    backdrop.addEventListener('click', close);
    document.addEventListener('keyup', e => { if (e.key === 'Escape') close(); });

    // Close on nav link click (not accordion buttons)
    panel.querySelectorAll('a').forEach(a => a.addEventListener('click', close));

    // Accordion
    panel.querySelectorAll('.drawer-accordion-btn').forEach(btn => {
        btn.addEventListener('click', function () {
            const targetId = this.dataset.target;
            const body     = document.getElementById(targetId);
            const isOpen   = body.classList.contains('open');

            // Close all
            panel.querySelectorAll('.drawer-accordion-body').forEach(b => b.classList.remove('open'));
            panel.querySelectorAll('.drawer-accordion-btn').forEach(b => b.classList.remove('expanded'));

            if (!isOpen) {
                body.classList.add('open');
                this.classList.add('expanded');
            }
        });

        // Auto-open active accordion
        const targetId = btn.dataset.target;
        const body     = document.getElementById(targetId);
        if (btn.classList.contains('drawer-active')) {
            body.classList.add('open');
            btn.classList.add('expanded');
        }
    });
})();
</script>
