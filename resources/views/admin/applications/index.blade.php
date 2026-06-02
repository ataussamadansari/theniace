@extends('admin.layout')

@section('title', 'Applications | THE NIACE Admin')

@section('content')

<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Student Applications</h1>
    <span class="badge badge-primary px-3 py-2" style="font-size:0.85rem; border-radius:999px;">
        <i class="fas fa-users mr-1"></i> {{ $applications->total() }} Total
    </span>
</div>

{{-- Date Filters --}}
<div class="mb-3 d-flex flex-wrap" style="gap:0.4rem;">
    @php
        $filters = [
            ''          => 'All',
            'today'     => 'Today',
            'yesterday' => 'Yesterday',
            'week'      => 'This Week',
            'month'     => 'This Month',
            'year'      => 'This Year',
        ];
    @endphp
    @foreach($filters as $val => $label)
        <a href="{{ request()->fullUrlWithQuery(['filter' => $val, 'page' => 1]) }}"
           class="btn btn-sm {{ $filter === $val ? 'btn-primary' : 'btn-outline-secondary' }}">
            {{ $label }}
        </a>
    @endforeach
</div>

<div class="card shadow mb-4">
    <div class="card-header py-3 d-flex align-items-center justify-content-between">
        <h6 class="m-0 font-weight-bold text-primary">
            @if($filter === 'today')     Today's Applications
            @elseif($filter === 'yesterday') Yesterday's Applications
            @elseif($filter === 'week')  This Week's Applications
            @elseif($filter === 'month') This Month's Applications
            @elseif($filter === 'year')  This Year's Applications
            @else All Applications
            @endif
        </h6>
        <small class="text-muted">{{ $applications->total() }} records</small>
    </div>
    <div class="card-body p-0">
        <div class="table-responsive">
            <table class="table table-hover mb-0">
                <thead>
                    <tr>
                        @php
                            function appSortLink(string $col, string $label, string $current, string $dir): string {
                                $newDir = ($current === $col && $dir === 'asc') ? 'desc' : 'asc';
                                $icon   = $current === $col
                                    ? ($dir === 'asc' ? ' ↑' : ' ↓')
                                    : '<span style="opacity:.3"> ↕</span>';
                                $url = request()->fullUrlWithQuery(['sort' => $col, 'direction' => $newDir, 'page' => 1]);
                                return "<a href=\"{$url}\" class=\"text-dark text-decoration-none\">{$label}{$icon}</a>";
                            }
                        @endphp
                        <th style="width:50px">#</th>
                        <th>{!! appSortLink('student_name', 'Student', $sort, $direction) !!}</th>
                        <th>Email</th>
                        <th>{!! appSortLink('age', 'Age', $sort, $direction) !!}</th>
                        <th>{!! appSortLink('education_level', 'Education', $sort, $direction) !!}</th>
                        <th>{!! appSortLink('mobile', 'Mobile', $sort, $direction) !!}</th>
                        <th>{!! appSortLink('created_at', 'Submitted', $sort, $direction) !!}</th>
                        <th class="text-right">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse($applications as $app)
                        <tr>
                            <td class="text-muted small">{{ $app->id }}</td>
                            <td>
                                <div class="d-flex align-items-center">
                                    <div class="stu-avatar mr-2">{{ strtoupper(substr($app->student_name, 0, 1)) }}</div>
                                    <div>
                                        <div class="font-weight-bold">{{ $app->student_name }}</div>
                                        <div class="text-muted small">
                                            {{ $app->father_name ?? '' }}{{ $app->mother_name ? ' / '.$app->mother_name : '' }}
                                        </div>
                                    </div>
                                </div>
                            </td>
                            <td class="small text-muted">{{ $app->email ?: '—' }}</td>
                            <td>{{ $app->age ?? '—' }}</td>
                            <td>
                                @if($app->education_level)
                                    <span class="badge badge-warning text-dark">{{ $app->education_level }}</span>
                                @else
                                    <span class="text-muted">—</span>
                                @endif
                            </td>
                            <td class="small">{{ $app->mobile ?: '—' }}</td>
                            <td class="small text-muted">
                                {{ $app->created_at->format('d M Y') }}<br>
                                <span class="text-xs">{{ $app->created_at->format('h:i A') }}</span>
                            </td>
                            <td class="text-right">
                                <a href="{{ route('admin.applications.show', $app) }}"
                                   class="btn btn-primary btn-action">
                                    <i class="fas fa-eye mr-1"></i> View
                                </a>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="8" class="text-center text-muted py-5">
                                <i class="fas fa-inbox fa-2x d-block mb-2 text-gray-300"></i>
                                No applications found for this period.
                            </td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>

    @if($applications->hasPages())
        <div class="card-footer bg-white d-flex align-items-center justify-content-between py-3">
            <small class="text-muted">
                Showing {{ $applications->firstItem() }}–{{ $applications->lastItem() }} of {{ $applications->total() }}
            </small>
            {{ $applications->links() }}
        </div>
    @endif
</div>

@endsection
