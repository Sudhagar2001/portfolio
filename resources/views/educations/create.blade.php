@extends('layouts.admin')

@section('content')
<!-- Bootstrap Icons -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">

<style>
    .card-header {
        background: linear-gradient(90deg, #007bff, #00c6ff);
        color: white;
        font-weight: 600;
        font-size: 1.25rem;
    }

    .btn-primary {
        background-color: #007bff;
        border-color: #007bff;
        transition: background-color 0.3s ease, border-color 0.3s ease;
    }

    .btn-primary:hover {
        background-color: #0056b3;
        border-color: #004085;
    }

    .btn-danger:hover {
        background-color: #dc3545;
        border-color: #c82333;
    }

    /* Form Labels and Inputs Styling */
    .form-label {
        font-weight: bold;
        font-size: 0.95rem;
    }

    .form-control {
        box-shadow: none;
        border: 1px solid #ced4da;
        border-radius: 0.375rem;
    }

    .form-control:focus {
        border-color: #007bff;
        box-shadow: 0 0 5px rgba(0, 123, 255, 0.25);
    }

    /* Table Header Styling */
    .table th {
        background-color: #007bff;
        color: white;
        text-align: center;
        font-size: 1rem;
        padding: 0.75rem;
    }

    .table {
        border-collapse: separate;
        border-spacing: 0 10px;
    }

    .table td {
        text-align: center;
        vertical-align: middle;
    }
</style>

<div class="container mt-4">
    <div class="card shadow-lg">
        <div class="card-header d-flex justify-content-between align-items-center">
            <h3 class="mb-0">Add Education</h3>
            <a href="{{ route('educations.index') }}" class="btn btn-warning">
                <i class="bi bi-arrow-left-circle"></i> Back to List
            </a>
        </div>
        <div class="card-body">
            <form action="{{ route('educations.store') }}" method="POST">
                @csrf
                <div class="row">
                    <div class="col-md-6 mb-3">
                        <label for="degree" class="form-label">Degree</label>
                        <input type="text" name="degree" class="form-control" placeholder="e.g., B.Sc. in Computer Science" required>
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="institution" class="form-label">Institution</label>
                        <input type="text" name="institution" class="form-control" placeholder="e.g., Harvard University" required>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-6 mb-3">
                        <label for="start_date" class="form-label">Start Date</label>
                        <input type="date" name="start_date" class="form-control" required>
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="end_date" class="form-label">End Date</label>
                        <input type="date" name="end_date" class="form-control">
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-6 mb-3">
                        <label for="grade" class="form-label">Grade</label>
                        <input type="text" name="grade" class="form-control" placeholder="e.g., First Class" required>
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="description" class="form-label">Description</label>
                        <textarea name="description" class="form-control" rows="3" placeholder="Brief description of the course..."></textarea>
                    </div>
                </div>

                <div class="d-flex justify-content-end mt-4">
                    <button type="submit" class="btn btn-primary me-2">
                        <i class="bi bi-save"></i> Save Education
                    </button>
                    <a href="{{ route('educations.index') }}" class="btn btn-danger">
                        <i class="bi bi-x-circle"></i> Cancel
                    </a>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
