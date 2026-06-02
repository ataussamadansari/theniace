<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class PageController extends Controller
{
    // ── Public Pages ──────────────────────────────────────────

    public function home(): View
    {
        return view('pages.home', [
            'universities' => [
                ['name' => 'Lovely Professional University',           'grade' => 'NAAC A++',     'image' => 'img/college/u1.webp'],
                ['name' => 'Shri Venkateshwara University',            'grade' => 'UGC Approved', 'image' => 'img/college/u2.webp'],
                ['name' => 'Mahaveer University',                      'grade' => 'UGC Approved', 'image' => 'img/college/u3.webp'],
                ['name' => 'Shobhit Deemed University',                'grade' => 'NAAC A',       'image' => 'img/college/u4.webp'],
                ['name' => 'Mangalyatan University',                   'grade' => 'UGC Approved', 'image' => 'img/college/u5.webp'],
                ['name' => 'Subharti University',                      'grade' => 'NAAC A+',      'image' => 'img/college/u6.webp'],
                ['name' => 'Amarpali University',                      'grade' => 'UGC Approved', 'image' => 'img/college/u7.webp'],
                ['name' => 'Dr. A.P.J. Kalam Technical University',    'grade' => 'State Univ.',  'image' => 'img/college/u8.webp'],
                ['name' => 'Chaudhary Charan Singh University Meerut', 'grade' => 'State Univ.',  'image' => 'img/college/u9.webp'],
                ['name' => 'IIMT University',                          'grade' => 'NAAC A',       'image' => 'img/college/u10.webp'],
                ['name' => 'Board of Technical Education',             'grade' => 'Govt. Board',  'image' => 'img/college/u11.webp'],
                ['name' => 'MATS University',                          'grade' => 'UGC Approved', 'image' => 'img/college/u12.webp'],
            ],
        ]);
    }

    public function about(): View
    {
        return view('pages.about');
    }

    public function college(): View
    {
        return view('pages.college');
    }

    public function contact(): View
    {
        return view('pages.contact');
    }

    public function submitContact(Request $request): RedirectResponse
    {
        $request->validate([
            'name'    => ['required', 'string', 'max:255'],
            'phone'   => ['required', 'string', 'max:20'],
            'email'   => ['required', 'email', 'max:255'],
            'message' => ['required', 'string', 'max:2000'],
        ]);

        return redirect()->route('contact')->with('success', 'Thank you! Your message has been sent. We will contact you soon.');
    }

    // ── Academic ──────────────────────────────────────────────

    public function ugCourse(): View
    {
        return view('pages.academic-ug');
    }

    public function pgCourse(): View
    {
        return view('pages.academic-pg');
    }

    public function computerCourse(): View
    {
        return view('pages.academic-computer');
    }

    public function certification(): View
    {
        return view('pages.academic-certification');
    }

    // ── University ────────────────────────────────────────────

    public function universityRegular(): View
    {
        return view('pages.university-regular');
    }

    public function universityDistance(): View
    {
        return view('pages.university-distance');
    }
}
