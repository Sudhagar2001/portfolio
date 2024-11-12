@extends('layouts.admin')

@section('content')
<link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">

<div class="container mt-5">
    <div class="card shadow-lg border-0">
        <div class="card-header bg-primary text-white d-flex justify-content-between align-items-center">
            <h3 class="mb-0">Education List</h3>
            <a href="{{ route('educations.create') }}" class="btn btn-warning btn-sm shadow-sm">
                <i class="bi bi-plus-circle me-2"></i> Add Education
            </a>
        </div>

        <div class="card-body p-4">
            @if($educations->isEmpty())
                <div class="alert alert-warning text-center" role="alert">
                    <i class="bi bi-info-circle me-2"></i> No education records found. Add new entries!
                </div>
            @else
                <table class="table table-bordered table-hover align-middle text-center mb-0">
                    <thead class="table-success">
                        <tr>
                            <th>Degree</th>
                            <th>Institution</th>
                            <th>Start Date</th>
                            <th>End Date</th>
                            <th>Grade</th>
                            <th>Description</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($educations as $education)
                            <tr>
                                <td><span class="badge bg-secondary">{{ $education->degree }}</span></td>
                                <td>{{ $education->institution }}</td>
                                <td>{{ \Carbon\Carbon::parse($education->start_date)->format('d M Y') }}</td>
                                <td>{{ \Carbon\Carbon::parse($education->end_date)->format('d M Y') }}</td>
                                <td>{{ $education->grade }}</td>
                                <td>{{ Str::limit($education->description, 40) }}</td>
                                <td class="d-flex justify-content-center gap-2">
                                    <a href="{{ route('educations.edit', $education) }}" class="btn btn-sm btn-warning" data-bs-toggle="tooltip" title="Edit">
                                        <i class="bi bi-pencil-square"></i>
                                    </a>
                                    <form action="{{ route('educations.destroy', $education) }}" method="POST" onsubmit="return confirm('Are you sure you want to delete this education?');">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-sm btn-danger" data-bs-toggle="tooltip" title="Delete">
                                            <i class="bi bi-trash"></i>
                                        </button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            @endif
        </div>

        <div class="card-footer d-flex justify-content-between align-items-center bg-light">
            <small class="text-muted">Total Educations: {{ count($educations) }}</small>
           
        </div>
    </div>
</div>

<script>
    // Initialize tooltips
    document.addEventListener('DOMContentLoaded', function () {
        var tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'));
        var tooltipList = tooltipTriggerList.map(function (tooltipTriggerEl) {
            return new bootstrap.Tooltip(tooltipTriggerEl);
        });
    });
</script>
@endsection
