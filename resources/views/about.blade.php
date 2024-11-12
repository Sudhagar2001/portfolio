@extends('layouts.app')
@section('title', 'About')

@section('content')
<body>
<div class="containers">
    <div class="row align-items-center">
        <!-- Left Section: Profile Image -->
        <div class="col-lg-4 text-center">
            <img src="{{ asset('images/photo.jpeg') }}" alt="Profile Photo" class="profile-img animate__animated animate__zoomIn">
        </div>

        <!-- Right Section: About Content -->
        <div class="col-lg-8 animate__animated animate__fadeIn animate__delay-1s">
            <h2 class="text-primary">Mr. Sudhagar C</h2>
            <p class="lead text-light">
                I am a passionate Full-Stack Developer with an MCA degree, specializing in building scalable web applications using HTML, CSS, JavaScript, PHP, and Laravel. I enjoy problem-solving and working on both frontend and backend development.
            </p>

            <div class="resume-buttons mt-3">
                @php
                    $shortResume = App\Models\Resume::where('resume_type', 'short')->first();
                    $fullResume = App\Models\Resume::where('resume_type', 'full')->first();
                @endphp

                <a href="{{ $shortResume ? asset('storage/' . $shortResume->file_path) : '#' }}" 
                   class="btn btn-outline-success mx-2 px-4 py-2 animate__animated animate__fadeIn animate__delay-1s" 
                   download {{ !$shortResume ? 'disabled' : '' }}>
                   <i class="bi bi-download"></i> Short Profile <i class="bi bi-file-earmark-person"></i>
                </a>

                <a href="{{ $fullResume ? asset('storage/' . $fullResume->file_path) : '#' }}" 
                   class="btn btn-outline-danger mx-2 px-4 py-2 animate__animated animate__fadeIn animate__delay-1s" 
                   download {{ !$fullResume ? 'disabled' : '' }}>
                   <i class="bi bi-download"></i> Full Profile <i class="bi bi-file-earmark-person"></i>
                </a>
            </div>
        </div>
    </div>

    <div class="text-primary">
        ---------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------
    </div>

    <!-- Education and Experience Sections -->
    <div class="row">
        <!-- Education Section -->
        <div class="col-lg-6 animate__animated animate__slideInLeft animate__delay-1s">
            <h3 class="text-success border-bottom pb-2">Education</h3>
            @foreach($educations as $education)
                <div class="card shadow-sm mb-3">
                    <div class="card-body">
                        <h5 class="card-title text-light">{{ $education->degree }}</h5>
                        <h6 class="card-subtitle mb-2 text-primary">{{ $education->institution }}</h6>
                        <p class="card-text text-success">{{ $education->start_date }} - {{ $education->end_date ?? 'Ongoing' }}</p>
                        <p class="card-text text-danger">Grade: {{ $education->grade }}</p>
                    </div>
                </div>
            @endforeach
        </div>

        <!-- Experience Section -->
        <div class="col-lg-6 animate__animated animate__slideInRight animate__delay-1s">
            <h3 class="text-danger border-bottom pb-2">Experience</h3>
            @foreach($experiences as $experience)
                <div class="card shadow-sm mb-3">
                    <div class="card-body">
                        <h5 class="card-title text-light">{{ $experience->job_title }}</h5>
                        <h6 class="card-subtitle mb-2 text-primary">{{ $experience->company }}</h6>
                        <p class="card-text text-success">{{ $experience->start_date }} - {{ $experience->end_date ?? 'Present' }}</p>
                        <p class="card-text text-danger">{{ $experience->description }}</p>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</div>
</body>
@endsection

<!-- Add Custom CSS -->
<style>
    .containers{
        margin-top: 30px;
        padding:20px;
    }
   
    /* Profile Image Styling */
    .profile-img {
        width: 100%;
        height: auto;
        max-width: 200px;
        border-radius: 12px;
        border: 4px solid #007bff;
        transition: transform 0.3s ease-in-out;
    }

    .profile-img:hover {
        transform: scale(1.1);
    }

    /* Resume Button Styling */
    .resume-buttons a {
        font-size: 1rem;
        border-radius: 5px;
        width: 180px;
        transition: background-color 0.3s, transform 0.2s;
    }

    .resume-buttons a:hover {
        transform: scale(1.05);
    }

    /* Section Titles */
    h3 {
        font-family: 'Poppins', sans-serif;
        font-weight: 600;
        text-transform: uppercase;
    }
    h2 {
        font-family: 'Poppins', sans-serif;
        font-weight: 60;
        font-size: 24px;
        text-transform: uppercase;
    }
    .lead {
        font-family: 'Raleway', sans-serif;
        font-size: 1.1rem;
    }

    .card-body {
        border-radius: 15px;
        transition: transform 0.3s ease-in-out;
        background-color: #37373b;
    }

    .card:hover {
        transform: translateY(-5px);
    }

    hr {
        border-top: 3px solid #007bff;
        margin: 2rem 0;
    }

    /* Responsive Design */
    @media (max-width: 992px) {
        .profile-img {
            max-width: 150px; /* Smaller image for medium devices */
        }

        .resume-buttons a {
            width: 100%; /* Full-width buttons for medium devices */
            margin-bottom: 10px;
        }

        h2 {
            font-size: 20px; /* Slightly smaller title for medium devices */
        }
    }

    @media (max-width: 768px) {
        .profile-img {
            max-width: 120px; /* Further reduce image size for smaller devices */
        }

        .resume-buttons a {
            width: 100%; /* Full-width buttons for smaller devices */
            margin-bottom: 10px;
        }

        h2 {
            font-size: 18px; /* Even smaller title for small devices */
        }
    }

    @media (max-width: 576px) {
        h2 {
            font-size: 16px; /* Smallest title for extra small devices */
        }

        .lead {
            font-size: 1rem; /* Reduce lead font size for small devices */
        }
    }
</style>

<!-- Add Bootstrap Icons -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.10.5/font/bootstrap-icons.min.css">

<!-- Add Animate.css for Animations -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css">
