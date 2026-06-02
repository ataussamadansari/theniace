<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\StoreCertificateRequest;
use App\Http\Requests\Admin\UpdateCertificateRequest;
use App\Models\Certificate;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\URL;
use Illuminate\Support\Str;

class CertificateController extends Controller
{
    public function index(Request $request): View
    {
        $search    = $request->string('search')->toString();
        $sort      = $request->get('sort', 'created_at');
        $direction = $request->get('direction', 'desc');

        $allowedSorts = ['certificate_number', 'student_name', 'course_name', 'status', 'issue_date', 'created_at'];
        if (!in_array($sort, $allowedSorts)) {
            $sort = 'created_at';
        }
        $direction = $direction === 'asc' ? 'asc' : 'desc';

        $certificates = Certificate::query()
            ->when($search, function ($query) use ($search) {
                $query->where('certificate_number', 'like', "%{$search}%")
                    ->orWhere('student_name', 'like', "%{$search}%")
                    ->orWhere('course_name', 'like', "%{$search}%");
            })
            ->orderBy($sort, $direction)
            ->paginate(10)
            ->withQueryString();

        return view('admin.certificates.index', compact('certificates', 'search', 'sort', 'direction'));
    }

    public function create(): View
    {
        return view('admin.certificates.create');
    }

    public function store(StoreCertificateRequest $request): RedirectResponse
    {
        $validated = $request->validated();

        if ($request->hasFile('student_photo')) {
            $validated['student_photo'] = $request->file('student_photo')->store('certificates/photos', 'public');
        }

        if ($request->hasFile('certificate_pdf')) {
            $validated['certificate_pdf'] = $request->file('certificate_pdf')->store('certificates/pdfs', 'public');
        }

        $validated['verification_slug'] = (string) Str::uuid();
        $validated['qr_code'] = URL::to('/certificate-verification?certificate_number='.$validated['certificate_number']);

        Certificate::query()->create($validated);

        return redirect()->route('admin.certificates.index')->with('success', 'Certificate created successfully.');
    }

    public function show(Certificate $certificate): View
    {
        return view('admin.certificates.show', compact('certificate'));
    }

    public function edit(Certificate $certificate): View
    {
        return view('admin.certificates.edit', compact('certificate'));
    }

    public function update(UpdateCertificateRequest $request, Certificate $certificate): RedirectResponse
    {
        $validated = $request->validated();

        if ($request->hasFile('student_photo')) {
            if ($certificate->student_photo) {
                Storage::disk('public')->delete($certificate->student_photo);
            }

            $validated['student_photo'] = $request->file('student_photo')->store('certificates/photos', 'public');
        }

        if ($request->hasFile('certificate_pdf')) {
            if ($certificate->certificate_pdf) {
                Storage::disk('public')->delete($certificate->certificate_pdf);
            }

            $validated['certificate_pdf'] = $request->file('certificate_pdf')->store('certificates/pdfs', 'public');
        }

        $validated['qr_code'] = URL::to('/certificate-verification?certificate_number='.$validated['certificate_number']);

        $certificate->update($validated);

        return redirect()->route('admin.certificates.index')->with('success', 'Certificate updated successfully.');
    }

    public function destroy(Certificate $certificate): RedirectResponse
    {
        if ($certificate->student_photo) {
            Storage::disk('public')->delete($certificate->student_photo);
        }

        if ($certificate->certificate_pdf) {
            Storage::disk('public')->delete($certificate->certificate_pdf);
        }

        $certificate->delete();

        return redirect()->route('admin.certificates.index')->with('success', 'Certificate deleted successfully.');
    }
}
