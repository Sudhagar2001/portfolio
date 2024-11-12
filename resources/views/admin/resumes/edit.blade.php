@extends('layouts.admin')

@section('content')
<div class="container my-5">
    <div class="card shadow">
        <div class="card-header bg-primary text-white">
            <h4>Edit Resume - {{ ucfirst($resume->resume_type) }}</h4>
        </div>
        <div class="card-body">
            @if(session('success'))
                <div class="alert alert-success">{{ session('success') }}</div>
            @endif

            <form action="{{ route('resumes.update', $resume) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')

                <div class="form-group">
                    <label for="file">Upload New Resume (PDF)</label>
                    <input type="file" name="file" class="form-control-file" required>
                </div>

                {{-- Display the old uploaded file --}}
                <div class="form-group mt-3">
                    <label>Current Resume:</label>
                    <p>
                        <a href="{{ asset('storage/' . $resume->file_path) }}" target="_blank" class="btn btn-outline-info">
                            View Current Resume
                        </a>
                        <span class="ml-2">(<em>{{ basename($resume->file_path) }}</em>)</span>
                    </p>
                </div>

                <button type="submit" class="btn btn-primary mt-3">Update Resume</button>
            </form>

            <a href="{{ route('resumes.index') }}" class="btn btn-secondary mt-3">Back to Manage Resumes</a>
        </div>
    </div>
</div>
@endsection
