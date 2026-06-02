<?php

use App\Http\Controllers\Admin\AuthController as AdminAuthController;
use App\Http\Controllers\Admin\CertificateController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\ApplicationController;
use App\Http\Controllers\CertificateVerificationController;
use App\Http\Controllers\PageController;
use Illuminate\Support\Facades\Route;

// ── Public pages ──────────────────────────────────────────────
Route::get('/',        [PageController::class, 'home'])->name('home');
Route::get('/about',   [PageController::class, 'about'])->name('about');
Route::get('/college', [PageController::class, 'college'])->name('college');
Route::get('/contact', [PageController::class, 'contact'])->name('contact');
Route::post('/contact',[PageController::class, 'submitContact'])->name('contact.submit');

// ── Academic ──────────────────────────────────────────────────
Route::prefix('academic')->name('academic.')->group(function () {
    Route::get('/ug-course',    [PageController::class, 'ugCourse'])->name('ug');
    Route::get('/pg-course',    [PageController::class, 'pgCourse'])->name('pg');
    Route::get('/computer-course', [PageController::class, 'computerCourse'])->name('computer');
    Route::get('/certification',[PageController::class, 'certification'])->name('certification');
});

// ── University ────────────────────────────────────────────────
Route::prefix('university')->name('university.')->group(function () {
    Route::get('/regular',  [PageController::class, 'universityRegular'])->name('regular');
    Route::get('/distance', [PageController::class, 'universityDistance'])->name('distance');
});

// ── Certificate Verification ──────────────────────────────────
Route::get('/certificate-verification',  [CertificateVerificationController::class, 'index'])->name('certificate.verification');
Route::post('/certificate-verification', [CertificateVerificationController::class, 'verify'])->name('certificate.verify');
Route::get('/certificate-verification/download/{certificate}',
    [CertificateVerificationController::class, 'download'])
    ->name('certificate.download')
    ->middleware('signed');

// ── Application Form ──────────────────────────────────────────
Route::get('/apply',  [ApplicationController::class, 'create'])->name('apply.create');
Route::post('/apply', [ApplicationController::class, 'store'])->name('apply.store');

// ── Admin ─────────────────────────────────────────────────────
Route::prefix('admin')->name('admin.')->group(function () {
    Route::middleware('admin.guest')->group(function () {
        Route::get('/login',  [AdminAuthController::class, 'showLoginForm'])->name('login');
        Route::post('/login', [AdminAuthController::class, 'login'])->name('login.submit');
    });

    Route::middleware('admin')->group(function () {
        Route::post('/logout',   [AdminAuthController::class, 'logout'])->name('logout');
        Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
        Route::resource('/certificates', CertificateController::class);
        Route::get('/applications',              [ApplicationController::class, 'index'])->name('applications.index');
        Route::get('/applications/{application}',[ApplicationController::class, 'show'])->name('applications.show');
    });
});

// ── Redirects ─────────────────────────────────────────────────
Route::redirect('/dashboard', '/admin/dashboard');
