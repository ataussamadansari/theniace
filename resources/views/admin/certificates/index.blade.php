@extends('admin.layout')

@section('title', 'Certificates | THE NIACE Admin')

@section('content')

<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Certificates</h1>
    <a href="{{ route('admin.certificates.create') }}" class="btn btn-sm btn-primary shadow-sm">
        <i class="fas fa-plus fa-sm text-white-50 mr-1"></i> Add Certificate
    </a>
</div>

<div class="card shadow mb-4">
    <div class="card-header py-3 d-flex align-items-center justify-content-between flex-wrap gap-2">
        <form method="GET" class="d-flex align-items-center m-0">
            <input type="hidden" name="sort" value="{{ $sort }}">
            <input type="hidden" name="direction" value="{{ $direction }}">
            <div class="input-group" style="max-width:340px;">
                <div class="input-group-prepend">
                    <span class="input-group-text bg-white border-right-0">
                        <i class="fas fa-search fa-sm text-gray-400"></i>
                    </span>
                </div>
                <input type="text" name="search" class="form-control border-left-0"
                    placeholder="Search certificate, student, course…"
                    value="{{ $search }}">
            </div>
            <button class="btn btn-dark btn-sm ml-2">Search</button>
            @if($search)
                <a href="{{ route('admin.certificates.index', ['sort' => $sort, 'direction' => $direction]) }}"
                   class="btn btn-outline-secondary btn-sm ml-1">Clear</a>
            @endif
        </form>
        <small class="text-muted">{{ $certificates->total() }} records</small>
    </div>

    <div class="card-body p-0">
        <div class="table-responsive">
            <table class="table table-hover mb-0">
                <thead>
                    <tr>
                        @php
                            function sortLink(string $col, string $label, string $current, string $dir, array $extra = []): string {
                                $newDir = ($current === $col && $dir === 'asc') ? 'desc' : 'asc';
                                $icon   = $current === $col
                                    ? ($dir === 'asc' ? '↑' : '↓')
                                    : '<span style="opacity:.35">↕</span>';
                                $params = array_merge($extra, ['sort' => $col, 'direction' => $newDir]);
                                $url    = request()->fullUrlWithQuery($params);
                                return "<a href=\"{$url}\" class=\"text-dark text-decoration-none\">{$label} {$icon}</a>";
                            }
                        @endphp
                        <th>{!! sortLink('certificate_number', 'Cert No', $sort, $direction, ['search' => $search]) !!}</th>
                        <th>{!! sortLink('student_name', 'Student', $sort, $direction, ['search' => $search]) !!}</th>
                        <th>{!! sortLink('course_name', 'Course', $sort, $direction, ['search' => $search]) !!}</th>
                        <th>{!! sortLink('status', 'Status', $sort, $direction, ['search' => $search]) !!}</th>
                        <th>{!! sortLink('issue_date', 'Issue Date', $sort, $direction, ['search' => $search]) !!}</th>
                        <th class="text-right">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse($certificates as $certificate)
                        <tr>
                            <td><span class="cert-chip">{{ $certificate->certificate_number }}</span></td>
                            <td><strong>{{ $certificate->student_name }}</strong></td>
                            <td>{{ $certificate->course_name }}</td>
                            <td>
                                <span class="badge badge-status badge-{{ strtolower($certificate->status) }}">
                                    {{ $certificate->status }}
                                </span>
                            </td>
                            <td class="text-muted small">{{ optional($certificate->issue_date)->format('d M Y') ?? '—' }}</td>
                            <td class="text-right">
                                <a class="btn btn-info btn-action mr-1"
                                   href="{{ route('admin.certificates.show', $certificate) }}" title="View">
                                    <i class="fas fa-eye"></i>
                                </a>
                                <a class="btn btn-warning btn-action mr-1"
                                   href="{{ route('admin.certificates.edit', $certificate) }}" title="Edit">
                                    <i class="fas fa-pen"></i>
                                </a>
                                <form action="{{ route('admin.certificates.destroy', $certificate) }}" method="POST"
                                      class="d-inline" onsubmit="return confirm('Delete this certificate?')">
                                    @csrf
                                    @method('DELETE')
                                    <button class="btn btn-danger btn-action" title="Delete">
                                        <i class="fas fa-trash"></i>
                                    </button>
                                </form>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="6" class="text-center text-muted py-5">
                                <i class="fas fa-inbox fa-2x d-block mb-2 text-gray-300"></i>
                                No certificates found.
                            </td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>

    @if($certificates->hasPages())
        <div class="card-footer bg-white d-flex align-items-center justify-content-between py-3">
            <small class="text-muted">
                Showing {{ $certificates->firstItem() }}–{{ $certificates->lastItem() }} of {{ $certificates->total() }}
            </small>
            {{ $certificates->links() }}
        </div>
    @endif
</div>

@endsection
