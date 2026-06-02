@php $editing = isset($certificate); @endphp

<div class="row">
    <div class="col-md-6 form-group">
        <label class="font-weight-bold small text-gray-700">Student Name <span class="text-danger">*</span></label>
        <input type="text" name="student_name" class="form-control"
               value="{{ old('student_name', $certificate->student_name ?? '') }}" required>
    </div>
    <div class="col-md-6 form-group">
        <label class="font-weight-bold small text-gray-700">Father Name <span class="text-danger">*</span></label>
        <input type="text" name="father_name" class="form-control"
               value="{{ old('father_name', $certificate->father_name ?? '') }}" required>
    </div>
    <div class="col-md-6 form-group">
        <label class="font-weight-bold small text-gray-700">Certificate Number <span class="text-danger">*</span></label>
        <input type="text" name="certificate_number" class="form-control"
               value="{{ old('certificate_number', $certificate->certificate_number ?? '') }}" required>
    </div>
    <div class="col-md-6 form-group">
        <label class="font-weight-bold small text-gray-700">Course Name <span class="text-danger">*</span></label>
        <input type="text" name="course_name" class="form-control"
               value="{{ old('course_name', $certificate->course_name ?? '') }}" required>
    </div>
    <div class="col-md-4 form-group">
        <label class="font-weight-bold small text-gray-700">Session <span class="text-danger">*</span></label>
        <input type="text" name="session" class="form-control"
               value="{{ old('session', $certificate->session ?? '') }}" required>
    </div>
    <div class="col-md-4 form-group">
        <label class="font-weight-bold small text-gray-700">Grade <span class="text-danger">*</span></label>
        <input type="text" name="grade" class="form-control"
               value="{{ old('grade', $certificate->grade ?? '') }}" required>
    </div>
    <div class="col-md-4 form-group">
        <label class="font-weight-bold small text-gray-700">Duration <span class="text-danger">*</span></label>
        <input type="text" name="duration" class="form-control"
               value="{{ old('duration', $certificate->duration ?? '') }}" required>
    </div>
    <div class="col-md-6 form-group">
        <label class="font-weight-bold small text-gray-700">Status <span class="text-danger">*</span></label>
        <select name="status" class="custom-select" required>
            @foreach(['Verified','Pending','Rejected'] as $s)
                <option value="{{ $s }}" {{ old('status', $certificate->status ?? 'Pending') === $s ? 'selected' : '' }}>
                    {{ $s }}
                </option>
            @endforeach
        </select>
    </div>
    <div class="col-md-6 form-group">
        <label class="font-weight-bold small text-gray-700">Issue Date <span class="text-danger">*</span></label>
        <input type="date" name="issue_date" class="form-control"
               value="{{ old('issue_date', isset($certificate) && $certificate->issue_date ? $certificate->issue_date->format('Y-m-d') : '') }}"
               required>
    </div>
    <div class="col-md-6 form-group">
        <label class="font-weight-bold small text-gray-700">Student Photo</label>
        <div class="custom-file">
            <input type="file" name="student_photo" class="custom-file-input" id="studentPhoto" accept=".jpg,.jpeg,.png,.webp">
            <label class="custom-file-label" for="studentPhoto">Choose photo…</label>
        </div>
        @if($editing && $certificate->student_photo)
            <small class="text-muted mt-1 d-block">
                <i class="fas fa-check-circle text-success mr-1"></i>
                Current photo on file.
                <a href="{{ asset('storage/'.$certificate->student_photo) }}" target="_blank">View</a>
            </small>
        @endif
    </div>
    <div class="col-md-6 form-group">
        <label class="font-weight-bold small text-gray-700">Certificate PDF</label>
        <div class="custom-file">
            <input type="file" name="certificate_pdf" class="custom-file-input" id="certPdf" accept=".pdf">
            <label class="custom-file-label" for="certPdf">Choose PDF…</label>
        </div>
        @if($editing && $certificate->certificate_pdf)
            <small class="text-muted mt-1 d-block">
                <i class="fas fa-check-circle text-success mr-1"></i>
                Current PDF on file.
                <a href="{{ asset('storage/'.$certificate->certificate_pdf) }}" target="_blank">View</a>
            </small>
        @endif
    </div>

    <div class="col-12 mt-2">
        <hr>
        <button type="submit" class="btn btn-primary px-4 mr-2">
            <i class="fas {{ $editing ? 'fa-save' : 'fa-plus' }} mr-1"></i>
            {{ $editing ? 'Update Certificate' : 'Create Certificate' }}
        </button>
        <a href="{{ route('admin.certificates.index') }}" class="btn btn-secondary px-4">
            <i class="fas fa-times mr-1"></i> Cancel
        </a>
    </div>
</div>

@push('scripts')
<script>
    // Show filename in custom-file-input label
    document.querySelectorAll('.custom-file-input').forEach(function(input) {
        input.addEventListener('change', function() {
            var label = this.nextElementSibling;
            label.textContent = this.files[0] ? this.files[0].name : 'Choose file…';
        });
    });
</script>
@endpush
