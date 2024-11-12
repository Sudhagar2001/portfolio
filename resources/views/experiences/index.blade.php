@extends('layouts.admin')
@section('title', 'Experience')

@section('content')
<link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">
<div class="container">
    <h2 class="mb-4">Work Experience</h2>

    <a href="{{ route('experiences.create') }}" class="btn btn-primary mb-3">Add Experience</a>

    @if (session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <table class="table">
        <thead>
            <tr>
                <th>Job Title</th>
                <th>Company</th>
                <th>Start Date</th>
                <th>End Date</th>
                <th>Description</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($experiences as $experience)
                <tr>
                    <td>{{ $experience->job_title }}</td>
                    <td>{{ $experience->company }}</td>
                    <td>{{ $experience->start_date}}</td>
                    <td>
    @empty($experience->end_date)
        Till Date
    @else
        {{ $experience->end_date }}
    @endempty
</td>

                    <td>{{ $experience->description }}</td>
                    <td>
                        <a href="{{ route('experiences.edit', $experience->id) }}" class="btn btn-warning btn-sm">Edit</a>
                        <form action="{{ route('experiences.destroy', $experience->id) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure?')">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
