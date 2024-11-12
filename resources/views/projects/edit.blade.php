@extends('layouts.admin')

@section('content')
<link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">

<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card shadow-lg">
                <div class="card-header bg-info text-white d-flex justify-content-between align-items-center">
                    <h4 class="mb-0">Edit Project</h4>
                    <a href="{{ route('projects.index') }}" class="btn btn-primary">
                        <i class="bi bi-arrow-left-circle me-1"></i> Back to Projects List
                    </a>
                </div>

                <div class="card-body">
                    <form action="{{ route('projects.update', $project) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')

                        <div class="row">
                            <!-- First Row: Title and Technologies -->
                            <div class="col-md-6 mb-3">
                                <label for="title" class="form-label">Project Title</label>
                                <input type="text" name="title" class="form-control" 
                                       value="{{ $project->title }}" required>
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="technologies" class="form-label">Technologies</label>
                                <input type="text" name="technologies" class="form-control" 
                                       value="{{ $project->technologies }}" required>
                            </div>

                            <!-- Second Row: Start Date and End Date -->
                            <div class="col-md-6 mb-3">
                                <label for="start_date" class="form-label">Start Date</label>
                                <input type="date" name="start_date" class="form-control" 
                                       value="{{ $project->start_date }}" required>
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="end_date" class="form-label">End Date</label>
                                <input type="date" name="end_date" class="form-control" 
                                       value="{{ $project->end_date }}">
                            </div>

                            <!-- Third Row: Description -->
                            <div class="col-md-12 mb-3">
                                <label for="description" class="form-label">Description</label>
                                <textarea name="description" class="form-control" rows="4">{{ $project->description }}</textarea>
                            </div>

                            <!-- Project Image Section (Optional) -->
                            <div class="col-md-12 mb-3">
                                <label for="image" class="form-label">Upload Project Image (Optional)</label>
                                <input type="file" name="image" class="form-control" accept="image/*">
                                <small class="text-muted">Leave blank if you don't want to change the image.</small>
                            </div>

                            <!-- Display Existing Image -->
                            @if($project->image)
                                <div class="col-md-12 mb-3">
                                    <label class="form-label">Current Project Image</label>
                                    <img src="{{ asset('storage/' . $project->image) }}" alt="Current Project Image" class="img-fluid rounded" style="max-height: 200px;">
                                </div>
                            @endif
                        </div>

                        <div class="d-flex justify-content-between">
                            <button type="submit" class="btn btn-success">
                                <i class="bi bi-save me-1"></i> Update Project
                            </button>
                            <a href="{{ route('projects.index') }}" class="btn btn-secondary">
                                Cancel
                            </a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
