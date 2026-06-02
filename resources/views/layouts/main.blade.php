<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title', 'THE NIACE | Empowering Students Through Modern Education')</title>
    <meta name="description" content="@yield('meta_description', 'THE NIACE — Trusted education partner for UG, PG, Computer, and Certification programs. 70+ universities, 5000+ students guided.')">
    <meta name="keywords"    content="@yield('meta_keywords', 'THE NIACE, education, UG courses, PG courses, computer courses, certification, university admission, distance learning')">

    {{-- Open Graph --}}
    <meta property="og:title"       content="@yield('title', 'THE NIACE | Empowering Students Through Modern Education')">
    <meta property="og:description" content="@yield('meta_description', 'THE NIACE — Trusted education partner for UG, PG, Computer, and Certification programs.')">
    <meta property="og:type"        content="website">
    <meta property="og:url"         content="{{ url()->current() }}">
    <meta property="og:image"       content="{{ asset('img/college/u1.webp') }}">

    {{-- Canonical --}}
    <link rel="canonical" href="{{ url()->current() }}">

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>
    @include('layouts.partials.header')

    <main>
        @yield('content')
    </main>

    @include('layouts.partials.footer')

    @stack('scripts')
</body>
</html>
