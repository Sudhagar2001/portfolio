@extends('layouts.admin')
@section('content')
<div class="container">
    <h2>Add Experience</h2>
    <form action="{{ route('experiences.store') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label for="title" class="form-label">Job Title</label>
            <input type="text" class="form-control" id="job_title" name="job_title" required>
        </div>
        <div class="mb-3">
            <label for="company" class="form-label">Company</label>
            <input type="text" class="form-control" id="company" name="company" required>
        </div>
        <div class="mb-3">
            <label for="start_date" class="form-label">Start Date</label>
            <input type="date" class="form-control" id="start_date" name="start_date" required>
        </div>
        <div class="mb-3">
            <label for="end_date" class="form-label">End Date (Optional)</label>
            <input type="date" class="form-control" id="end_date" name="end_date">
        </div>
        <div class="row">
                                <div class="col-md-12 mb-3">
                                    <label for="description" class="form-label">Description</label>
                                    <textarea name="description" class="form-control" rows="4" 
                                              placeholder="Write a brief project description"></textarea>
                                </div>
                            </div>
        <button type="submit" class="btn btn-success">Add Experience</button>
    </form>
</div>
@endsection
