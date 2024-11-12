<!-- CSS -->
<style>
    /* Navbar styling */
    .navbar {
        position: fixed;
        top: 0;
        left: 0;
        width: 100%;
        z-index: 1030;
    }

    .navbar-brand {
        font-weight: bold;
        font-size: 1.5rem;
    }

    /* Logo styling */
    .logo {
        width: 80px;
        height: auto;
        border-radius: 5px;
    }

    /* Custom hover effect for links */
    .nav-link {
        transition: background-color 0.3s, color 0.3s;
        margin-left: 20px;
    }

    /* Button styling */
    .btn {
        width: 120px;
    }

    /* Ensure the navbar doesn't overlap with content */
    body {
        padding-top: 70px;
    }

    /* Align Admin Login button to the far right */
    .admin-btn {
        position: absolute;
        right: 0;
    }

    /* Background and text adjustments */
    html, body {
        height: 100%;
        margin: 0;
        background-color: #333;
    }

    /* Styles for smaller screens */
    @media (max-width: 768px) {
        .navbar {
            padding: 0.5rem;
        }
        .nav-link {
            font-size: 0.9rem;
            margin-left: 5px;
        }
        .btn {
            width: auto;
            padding: 0.25rem 0.5rem;
        }
        .logo {
            width: 60px;
        }
    }
</style>

<!-- Navbar -->
<nav class="navbar navbar-expand-lg navbar-light bg-light shadow-sm">
    <div class="container">
        <!-- Logo -->
        <a href="{{ route('home') }}" class="navbar-brand">
            <img src="{{ asset('images/logo.png') }}" alt="Logo" class="logo">
        </a>

        <!-- Toggler for mobile screens -->
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <!-- Navbar Links -->
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item">
                    <a class="btn btn-primary nav-link text-white" href="{{ route('home') }}">
                        <i class="fas fa-home"></i> Home
                    </a>
                </li>
                <li class="nav-item">
                    <a class="btn btn-secondary nav-link text-white" href="{{ route('about') }}">
                        <i class="fas fa-user"></i> About Me
                    </a>
                </li>
                <li class="nav-item">
                    <a class="btn btn-success nav-link text-white" href="{{ route('services') }}">
                        <i class="fas fa-briefcase"></i> Services
                    </a>
                </li>
                <li class="nav-item">
                    <a class="btn btn-info nav-link text-white" href="{{ route('contact') }}">
                        <i class="fas fa-envelope"></i> Contact Us
                    </a>
                </li>
                <li class="nav-item">
                    <a class="btn btn-warning nav-link text-white" href="#">
                        <i class="fas fa-blog"></i> Blogs
                    </a>
                </li>
            </ul>
            <ul class="navbar-nav ms-auto admin-btn">
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('admin.login') }}">
                        <i class="fas fa-user-shield"></i> Admin Login
                    </a>
                </li>
            </ul>
        </div>
    </div>
</nav>

<!-- Include Bootstrap JS and Popper.js -->
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js"></script>
<script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
