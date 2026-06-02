<?php

namespace App\Http\Controllers;

use App\Models\Certificate;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Symfony\Component\HttpFoundation\BinaryFileResponse;

class CertificateVerificationController extends Controller
{
    public function index(Request $request): View
    {
        return view('pages.certificate-verification', [
            'certificate' => null,
            'searchedNumber' => $request->string('certificate_number')->toString(),
        ]);
    }

    public function verify(Request $request): View|RedirectResponse
    {
        $validated = $request->validate([
            'certificate_number' => ['required', 'string', 'max:100'],
        ]);

        $certificate = Certificate::query()
            ->where('certificate_number', $validated['certificate_number'])
            ->first();

        if (! $certificate) {
            return back()->withErrors([
                'certificate_number' => 'Invalid certificate number. Please check and try again.',
            ])->withInput();
        }

        return view('pages.certificate-verification', [
            'certificate' => $certificate,
            'searchedNumber' => $validated['certificate_number'],
        ]);
    }

    public function download(Request $request, Certificate $certificate): BinaryFileResponse
    {
        abort_unless($request->hasValidSignature(), 403);
        abort_if(! $certificate->certificate_pdf, 404);

        $path = Storage::disk('public')->path($certificate->certificate_pdf);

        return response()->download($path, 'certificate-'.$certificate->certificate_number.'.pdf');
    }
}
