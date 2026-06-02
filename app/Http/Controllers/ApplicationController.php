<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Application;
use Illuminate\Http\Request;

class ApplicationController extends Controller
{
    public function create()
    {
        return view('applications.create');
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'student_name'          => 'required|string|max:255',
            'email'                 => 'nullable|email|max:255',
            'course_interest'       => 'nullable|string|max:100',
            'age'                   => 'nullable|integer|min:1|max:120',
            'education_level'       => 'nullable|string|max:50',
            'graduation_percentage' => 'nullable|string|max:10',
            'father_name'           => 'nullable|string|max:255',
            'mother_name'           => 'nullable|string|max:255',
            'address'               => 'nullable|string|max:2000',
            'dob'                   => 'nullable|date',
            'mobile'                => 'nullable|string|max:25',
            'aadhar_no'             => 'nullable|string|max:64',
        ]);

        $application = Application::create($data);

        return redirect()->route('apply.create')->with('success', 'Application submitted successfully. Our team will contact you soon.');
    }

    // Admin index
    public function index(Request $request)
    {
        $sort      = $request->get('sort', 'created_at');
        $direction = $request->get('direction', 'desc');
        $filter    = $request->get('filter', '');

        $allowedSorts = ['id', 'student_name', 'age', 'education_level', 'mobile', 'created_at'];
        if (!in_array($sort, $allowedSorts)) {
            $sort = 'created_at';
        }
        $direction = $direction === 'asc' ? 'asc' : 'desc';

        $applications = Application::query()
            ->when($filter === 'today', fn($q) =>
                $q->whereDate('created_at', today())
            )
            ->when($filter === 'yesterday', fn($q) =>
                $q->whereDate('created_at', today()->subDay())
            )
            ->when($filter === 'week', fn($q) =>
                $q->whereBetween('created_at', [now()->startOfWeek(), now()->endOfWeek()])
            )
            ->when($filter === 'month', fn($q) =>
                $q->whereMonth('created_at', now()->month)
                  ->whereYear('created_at', now()->year)
            )
            ->when($filter === 'year', fn($q) =>
                $q->whereYear('created_at', now()->year)
            )
            ->orderBy($sort, $direction)
            ->paginate(10)
            ->withQueryString();

        return view('admin.applications.index', compact('applications', 'sort', 'direction', 'filter'));
    }

    // Admin detail view
    public function show(Application $application)
    {
        return view('admin.applications.show', compact('application'));
    }
}

