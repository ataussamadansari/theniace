@extends('admin.layout')

@section('title', 'Dashboard | THE NIACE Admin')

@section('content')

<!-- Page Heading -->
<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
    <a href="{{ route('admin.certificates.create') }}" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm">
        <i class="fas fa-plus fa-sm text-white-50 mr-1"></i> Add Certificate
    </a>
</div>

<!-- Stat Cards -->
<div class="row">

    <div class="col-xl-4 col-md-6 mb-4">
        <div class="card border-left-primary shadow h-100 py-2">
            <div class="card-body">
                <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                        <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Total Certificates</div>
                        <div class="h5 mb-0 font-weight-bold text-gray-800">{{ $totalCertificates }}</div>
                    </div>
                    <div class="col-auto">
                        <i class="fas fa-certificate fa-2x text-gray-300"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="col-xl-4 col-md-6 mb-4">
        <div class="card border-left-success shadow h-100 py-2">
            <div class="card-body">
                <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                        <div class="text-xs font-weight-bold text-success text-uppercase mb-1">Verified</div>
                        <div class="h5 mb-0 font-weight-bold text-gray-800">{{ $verifiedCertificates }}</div>
                    </div>
                    <div class="col-auto">
                        <i class="fas fa-check-circle fa-2x text-gray-300"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="col-xl-4 col-md-6 mb-4">
        <div class="card border-left-warning shadow h-100 py-2">
            <div class="card-body">
                <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                        <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">Pending</div>
                        <div class="h5 mb-0 font-weight-bold text-gray-800">{{ $pendingCertificates }}</div>
                    </div>
                    <div class="col-auto">
                        <i class="fas fa-clock fa-2x text-gray-300"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>

<!-- Recent Certificates Table -->
<div class="card shadow mb-4">
    <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
        <h6 class="m-0 font-weight-bold text-primary">Recent Certificates</h6>
        <a href="{{ route('admin.certificates.index') }}" class="btn btn-sm btn-primary">View All</a>
    </div>
    <div class="card-body p-0">
        <div class="table-responsive">
            <table class="table table-hover mb-0">
                <thead>
                    <tr>
                        <th>Certificate No</th>
                        <th>Student</th>
                        <th>Course</th>
                        <th>Status</th>
                        <th>Issue Date</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse($recentCertificates as $item)
                        <tr>
                            <td><span class="cert-chip">{{ $item->certificate_number }}</span></td>
                            <td><strong>{{ $item->student_name }}</strong></td>
                            <td>{{ $item->course_name }}</td>
                            <td>
                                <span class="badge badge-status badge-{{ strtolower($item->status) }}">
                                    {{ $item->status }}
                                </span>
                            </td>
                            <td class="text-muted">{{ optional($item->issue_date)->format('d M Y') ?? '—' }}</td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="5" class="text-center text-muted py-4">
                                <i class="fas fa-inbox mr-2"></i> No certificates found.
                            </td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
</div>

@endsection
