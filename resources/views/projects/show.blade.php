@extends('layouts.app')

@section('title', $project->title)

@section('content')
<style>
/* Global Styling */
body {
    font-family: 'Arial', sans-serif;
    background-color: #f8f9fa;
    color: #333;
    margin: 0;
    padding: 0;
}

/* Container for project */
.project-container {
    display: flex;
    justify-content: center;
    align-items: center;
    min-height: 100vh;
    padding: 20px;
    margin-top:50px;
}

/* Project Card Styling */
.project-card {
    display: flex;
    background-color: #fff;
    border-radius: 12px;
    box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
    max-width: 1000px;
    width: 100%;
    padding: 20px;
}

/* Image Styling */
.project-image {
    flex: 1;
    padding-right: 20px;
}

.project-image img {
    border-radius: 8px;
    width: 100%;
    object-fit: cover;
    height: auto;
    max-height: 800px;
}

/* Details Styling */
.project-details {
    flex: 2;
    padding-left: 20px;
    display: flex;
    flex-direction: column;
    justify-content: space-between;
}

.project-title {
    font-size: 28px;
    font-weight: 600;
    color: #1c74b2;
    margin-bottom: 15px;
}

.project-description {
    font-size: 16px;
    line-height: 1.5;
    margin-bottom: 20px;
    color: #555;
}

.project-details p {
    font-size: 14px;
    color: #777;
}

.project-details .badge {
    background-color: #e4e5e7;
    padding: 6px 12px;
    border-radius: 20px;
    font-size: 12px;
    color: #333;
}

.project-details .date {
    font-style: italic;
    color: #aaa;
}

.back-button {
    margin-top: 30px;
    display: flex;
    justify-content: center;
}

.btn-back {
    background-color: #1c74b2;
    color: #fff;
    padding: 10px 20px;
    border-radius: 30px;
    text-decoration: none;
    font-size: 16px;
    font-weight: 500;
    transition: background-color 0.3s;
}

.btn-back:hover {
    background-color: #155a8a;
    color:white;
    text-decoration: none;
}
</style>

<div class="project-container">
    <div class="project-card">

        <!-- Project Image (if exists) -->
        @if($project->image)
        <div class="project-image">
            <img src="{{ asset('storage/' . $project->image) }}" alt="{{ $project->title }} Image">
        </div>
        @endif

        <!-- Project Details -->
        <div class="project-details">
            <h1 class="project-title">{{ $project->title }}</h1>

            <p class="project-description">{{ $project->description }}</p>

            <!-- Project Information -->
            <div class="project-info">
                <p><strong>Technologies:</strong> <span class="badge">{{ $project->technologies }}</span></p>
                <p><strong>Start Date:</strong> <span class="date">{{ \Carbon\Carbon::parse($project->start_date)->format('F j, Y') }}</span></p>
                <p><strong>End Date:</strong> <span class="date">{{ $project->end_date ? \Carbon\Carbon::parse($project->end_date)->format('F j, Y') : 'N/A' }}</span></p>
            </div>

            <!-- Back Button -->
            <div class="back-button">
                <a href="{{ route('home') }}" class="btn-back">Back to Projects</a>
            </div>
        </div>

    </div>
</div>

@endsection
