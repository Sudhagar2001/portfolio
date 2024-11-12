@extends('layouts.app')

@section('title', 'Home')

@section('content')
<div class="container-fluid">
    <!-- Hero Section -->
    <div class="row hero-section bg-gradient text-white py-5">
        <div class="col-md-6 text-center text-md-start">
            <img src="{{ asset('images/profile.jpeg') }}" alt="Profile Photo" class="img-fluid rounded-circle" style="max-width: 250px; animation: fadeIn 1s;">
        </div>
        <div class="col-md-6 text-center text-md-start">
            <h1 class="display-3 fw-bold animated fadeInUp">Hi, I'm Sudhagar C</h1>
            <p class="lead animated fadeInUp" style="animation-delay: 0.5s;">Full-Stack Developer specializing in PHP, Laravel, MySQL, and JavaScript.</p>
            <div class="d-flex justify-content-center justify-content-md-start gap-15">
                <a href="#skills" class="btn btn-light btn-lg">Skills</a>&nbsp;&nbsp;
                <a href="#projects" class="btn btn-light btn-lg">Projects</a>&nbsp;&nbsp;
                <a href="#inquiry" class="btn btn-light btn-lg">Enquiry</a>
            </div>
        </div>
    </div>

    <!-- Skills Section -->
    <div class="container py-5" id="skills">
        <h2 class="text-center text-primary mb-4">Skills</h2>
        <div class="row text-center">
            @foreach(['HTML & CSS' => 'bi-code-slash', 'Bootstrap' => 'bi-bootstrap', 'Laravel' => 'bi-layers', 'MySQL' => 'bi-database'] as $skill => $icon)
                <div class="col-6 col-md-3 mb-4">
                    <div class="skill-card p-4 rounded-4 shadow-lg bg-primary text-white">
                        <i class="bi {{ $icon }} fs-2 mb-3"></i>
                        <h5>{{ $skill }}</h5>
                    </div>
                </div>
            @endforeach
        </div>
    </div>

    <!-- Recent Projects Section -->
    <div class="container py-5" id="projects">
        <h2 class="text-center text-primary mb-4">Recent Projects</h2>
        <div class="row">
            @if($recentProjects->isEmpty())
                <p class="text-muted text-center w-100">No projects available at the moment.</p>
            @else
                @foreach($recentProjects as $project)
                    <div class="col-12 col-md-6 col-lg-4 mb-4">
                        <div class="project-card shadow-lg rounded-4 bg-light">
                            <div class="card-body">
                                <h5 class="card-title text-primary">{{ $project->title }}</h5>
                                <p class="card-text text-muted">{{ \Illuminate\Support\Str::limit($project->description, 80) }}</p>
                                <a href="{{ route('projects.show', $project->id) }}" class="btn btn-outline-primary w-100">View Details</a>
                            </div>
                        </div>
                    </div>
                @endforeach
            @endif
        </div>
    </div>

    <!-- Inquiry Form Section -->
    <div class="container py-5" id="inquiry">
        <h2 class="text-center text-primary mb-4">Inquire About My Work</h2>
        <div class="row justify-content-center">
            <div class="col-12 col-md-8 col-lg-6">
                <div class="card shadow-lg border-0 rounded-4">
                    <div class="card-body p-4 bg-dark text-white">
                        <form action="{{ route('inquiry.submit') }}" method="POST">
                            @csrf
                            <div class="row">
                                <div class="col-12 col-md-6 mb-3">
                                    <input type="text" name="name" class="form-control rounded-3" placeholder="Your Name" required>
                                </div>
                                <div class="col-12 col-md-6 mb-3">
                                    <input type="email" name="email" class="form-control rounded-3" placeholder="Your Email" required>
                                </div>
                            </div>
                            <div class="mb-3">
                                <textarea name="message" class="form-control rounded-3" rows="4" placeholder="Your Message" required></textarea>
                            </div>
                            <button type="submit" class="btn btn-warning text-dark w-100 rounded-3">Submit Inquiry</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Custom Styles -->
<style>
    /* Hero Section */
    .hero-section {
        background: linear-gradient(to right, #1e2a47, #4e73df);
    }
    .hero-section h1 {
        font-size: 3.5rem;
        font-weight: 700;
        animation: fadeInUp 1s ease-out;
    }
    .hero-section p {
        font-size: 1.25rem;
        animation: fadeInUp 1s ease-out;
    }
    .d-flex a {
        animation: fadeInUp 1s ease-out;
    }

    /* Skills Section */
    .skill-card {
        transition: transform 0.3s ease, box-shadow 0.3s ease;
    }
    .skill-card:hover {
        transform: translateY(-10px);
        box-shadow: 0 15px 30px rgba(0, 0, 0, 0.1);
    }

    .skill-card h5 {
        font-weight: 500;
        font-size: 1.1rem;
    }

    /* Project Cards */
    .project-card {
        background-color: #ffffff;
        border-radius: 1rem;
        overflow: hidden;
        transition: box-shadow 0.3s ease;
    }

    .project-card:hover {
        box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
    }

    .project-card img {
        height: 200px;
        object-fit: cover;
        border-bottom: 1px solid #ddd;
    }

    .card-title {
        font-size: 1.2rem;
        font-weight: 600;
    }

    .btn-outline-primary {
        border-color: #007bff;
        color: #007bff;
    }

    .btn-outline-primary:hover {
        background-color: #007bff;
        color: white;
    }

    /* Inquiry Form */
    .form-control {
        background-color: #f1f1f1;
        border-radius: 10px;
        padding: 1rem;
    }

    .btn-warning {
        background-color: #f39c12;
        border: none;
        transition: background-color 0.3s ease;
    }

    .btn-warning:hover {
        background-color: #e67e22;
    }

    /* Responsive Design */
    @media (max-width: 767px) {
        .hero-section h1 {
            font-size: 2.5rem;
        }
        .hero-section p {
            font-size: 1rem;
        }
    }

    /* Animations */
    @keyframes fadeIn {
        0% {
            opacity: 0;
        }
        100% {
            opacity: 1;
        }
    }

    @keyframes fadeInUp {
        0% {
            opacity: 0;
            transform: translateY(20px);
        }
        100% {
            opacity: 1;
            transform: translateY(0);
        }
    }

</style>

<!-- Bootstrap Icons -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.10.5/font/bootstrap-icons.min.css">
@endsection
