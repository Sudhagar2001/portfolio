<!-- resources/views/experiences/edit.blade.php -->
@extends('layouts.admin')
@section('content')
    <h1>Edit Experience</h1>
    <form action="{{ route('experiences.update', $experience) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="job_title">Job Title</label>
            <input type="text" name="job_title" class="form-control" value="{{ $experience->job_title }}" required>
        </div>
        <div class="form-group">
            <label for="company_name">Company Name</label>
            <input type="text" name="company" class="form-control" value="{{ $experience->company }}" required>
        </div>
        <div class="form-group">
            <label for="start_date">Start Date</label>
            <input type="date" name="start_date" class="form-control" value="{{ $experience->start_date }}" required>
        </div>
        <div class="form-group">
            <label for="end_date">End Date</label>
            <input type="date" name="end_date" class="form-control" value="{{ $experience->end_date }}">
        </div>
        <div class="form-group">
            <label for="description">Description</label>
            <textarea name="description" class="form-control">{{ $experience->description }}</textarea>
        </div>
        <button type="submit" class="btn btn-primary">Update Experience</button>
    </form>
@endsection
