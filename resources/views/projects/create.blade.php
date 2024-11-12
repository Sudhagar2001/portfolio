@extends('layouts.admin')

@section('content')
<link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">

<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card shadow-lg">
                <div class="card-header bg-primary text-white d-flex justify-content-between align-items-center">
                    <h4 class="mb-0">Add New Project</h4>
                    <a href="{{ route('projects.index') }}" class="btn btn-warning btn-sm">
                        <i class="bi bi-arrow-left-circle me-1"></i> Back to Projects
                    </a>
                </div>
                <div class="card-body">
                    <form action="{{ route('projects.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf

                        <!-- First Row: Title and Technologies -->
                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <label for="title" class="form-label">Project Title</label>
                                <input type="text" name="title" class="form-control" 
                                       placeholder="Enter project title" required>
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="technologies" class="form-label">Technologies</label>
                                <input type="text" name="technologies" class="form-control" 
                                       placeholder="E.g., Laravel, Vue.js" required>
                            </div>
                        </div>

                        <!-- Second Row: Start Date and End Date -->
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

                        <!-- Third Row: Description -->
                        <div class="row">
                            <div class="col-md-12 mb-3">
                                <label for="description" class="form-label">Description</label>
                                <textarea name="description" class="form-control" rows="4" 
                                          placeholder="Write a brief project description"></textarea>
                            </div>
                        </div>

                        <!-- Project Image Section -->
                        <div class="row mb-3">
                            <div class="col-md-12">
                                <label for="image" class="form-label">Upload Project Image</label>
                                <input type="file" name="image" class="form-control" accept="image/*">
                                <small class="text-muted">Optional: Upload an image to represent your project.</small>
                            </div>
                        </div>

                        <!-- Buttons -->
                        <div class="d-flex justify-content-between">
                            <button type="submit" class="btn btn-success">
                                <i class="bi bi-plus-circle me-2"></i> Save Project
                            </button>
                            <a href="{{ route('projects.index') }}" class="btn btn-secondary">Cancel</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Custom Styles -->
<style>
    .card-header {
        background-color: #007bff;
    }

    .card-body {
        background-color: #f9f9f9;
    }

    .btn-primary, .btn-success, .btn-warning {
        transition: all 0.3s ease-in-out;
    }

    .btn-primary:hover, .btn-success:hover, .btn-warning:hover {
        transform: translateY(-3px);
        box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
    }

    .form-label {
        font-weight: bold;
    }

    .card-footer {
        background-color: #f0f0f0;
        padding: 15px;
        text-align: center;
    }
</style>

@endsection
