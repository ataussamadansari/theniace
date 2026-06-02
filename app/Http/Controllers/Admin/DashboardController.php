<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Certificate;
use Illuminate\Contracts\View\View;

class DashboardController extends Controller
{
    public function index(): View
    {
        return view('admin.dashboard', [
            'totalCertificates' => Certificate::query()->count(),
            'verifiedCertificates' => Certificate::query()->where('status', 'Verified')->count(),
            'pendingCertificates' => Certificate::query()->where('status', 'Pending')->count(),
            'recentCertificates' => Certificate::query()->latest()->limit(8)->get(),
        ]);
    }
}
