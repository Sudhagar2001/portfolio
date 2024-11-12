@extends('layouts.admin')

@section('content')
<link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">

<div class="container mt-5">
    <div class="card shadow-lg">
        <div class="card-header bg-primary text-white d-flex justify-content-between align-items-center">
            <h4 class="mb-0">Edit Education</h4>
            <a href="{{ route('educations.index') }}" class="btn btn-warning btn-sm">
                <i class="bi bi-arrow-left"></i> Back to List
            </a>
        </div>
        <div class="card-body">
            <form action="{{ route('educations.update', $education) }}" method="POST" class="p-4">
                @csrf
                @method('PUT')
                <div class="row g-3">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="degree" class="form-label">Degree</label>
                            <input type="text" name="degree" class="form-control" value="{{ $education->degree }}" required>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="institution" class="form-label">Institution</label>
                            <input type="text" name="institution" class="form-control" value="{{ $education->institution }}" required>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="start_date" class="form-label">Start Date</label>
                            <input type="date" name="start_date" class="form-control" value="{{ $education->start_date }}" required>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="end_date" class="form-label">End Date</label>
                            <input type="date" name="end_date" class="form-control" value="{{ $education->end_date }}">
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="grade" class="form-label">Grade</label>
                            <input type="text" name="grade" class="form-control" value="{{ $education->grade }}">
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="description" class="form-label">Description</label>
                            <textarea name="description" class="form-control" rows="4">{{ $education->description }}</textarea>
                        </div>
                    </div>

                    <div class="col-12">
                        <button type="submit" class="btn btn-success">
                            <i class="bi bi-pencil-square me-2"></i> Update Education
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>

@endsection
