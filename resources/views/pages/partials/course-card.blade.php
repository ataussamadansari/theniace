@php
    $image = !empty($course['image']) && file_exists(public_path($course['image']))
        ? asset($course['image'])
        : 'https://images.unsplash.com/photo-1523240795612-9a054b0db644?auto=format&fit=crop&w=900&q=80';
@endphp

<div class="course-card h-100">
    <div class="course-card-media">
        <img src="{{ $image }}" alt="{{ $course['name'] }}" loading="lazy">
        <span class="course-badge">{{ $badge }}</span>
    </div>
    <div class="course-card-body">
        <h5 class="course-card-title">{{ $course['name'] }}</h5>
        <div class="course-meta">
            <div class="course-meta-item">
                <i class="fa-regular fa-clock"></i>
                <span>{{ $course['duration'] }}</span>
            </div>
            <div class="course-meta-item">
                <i class="fa-solid fa-graduation-cap"></i>
                <span>{{ $course['eligibility'] }}</span>
            </div>
        </div>
        <a href="{{ route('contact') }}" class="course-link">Apply Now <i class="fa-solid fa-arrow-right"></i></a>
    </div>
</div>