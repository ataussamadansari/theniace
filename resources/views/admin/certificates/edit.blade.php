@extends('admin.layout')

@section('title', 'Edit Certificate | THE NIACE Admin')

@section('content')

<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Edit Certificate</h1>
    <a href="{{ route('admin.certificates.index') }}" class="btn btn-sm btn-secondary shadow-sm">
        <i class="fas fa-arrow-left fa-sm mr-1"></i> Back
    </a>
</div>

<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Update Certificate — {{ $certificate->certificate_number }}</h6>
    </div>
    <div class="card-body">
        @if($errors->any())
            <div class="alert alert-danger">
                <ul class="mb-0">
                    @foreach($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form action="{{ route('admin.certificates.update', $certificate) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            @include('admin.certificates._form', ['certificate' => $certificate])
        </form>
    </div>
</div>

@endsection
