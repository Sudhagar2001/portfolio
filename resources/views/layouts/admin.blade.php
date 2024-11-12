<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <!-- Include Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">

 
    <!-- jQuery and Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXlJ/PF9iUcOcw+qn0V7QB6XTTw3NxQK6AOW5onq2z9uAkz9FvfxrgoTfS3z" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTpD6cd4uw2MJlgDgFas54B1Pt7QQo46I1Q1F2XycKjp9F0QpP" crossorigin="anonymous"></script>
    <style>
        html, body {
            height: 100%; /* Full height */
        }
        
        body {
            display: flex;
            flex-direction: column; /* Align children in a column */
            height:100vh;
        }

        .content {
            flex: 1; /* Take remaining space */
            padding-bottom: 70px; /* Space for the footer */
        }
    </style>
</head>

<body>
    <div class="container-fluid p-0 d-flex flex-column min-vh-100">
        <!-- Navbar -->
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark shadow-sm">
    <a class="navbar-brand ms-3" href="{{ route('admin.dashboard') }}">
        <strong>Admin Dashboard</strong>
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ms-auto">
            <li class="nav-item">
                <a class="nav-link {{ request()->routeIs('admin.dashboard') ? 'active' : '' }}" href="{{ route('admin.dashboard') }}">Dashboard</a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{ request()->routeIs('educations.index') ? 'active' : '' }}" href="{{ route('educations.index') }}">Manage Educations</a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{ request()->routeIs('projects.index') ? 'active' : '' }}" href="{{ route('projects.index') }}">Manage Projects</a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{ request()->routeIs('experiences.index') ? 'active' : '' }}" href="{{ route('experiences.index') }}">Manage Experiences</a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{ request()->routeIs('resumes.index') ? 'active' : '' }}" href="{{ route('resumes.index') }}">Manage Resumes</a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{ request()->routeIs('contacts.index') ? 'active' : '' }}" href="{{ route('contacts.index') }}">Manage Contacts</a>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    {{ auth()->user()->username }} <!-- Display the authenticated user's name -->
                </a>
                <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                    <li><a class="dropdown-item" href="#">My Profile</a></li>
                    <li><a class="dropdown-item" href="#">Settings</a></li>
                    <li><hr class="dropdown-divider"></li>
                    <li>
                        <form action="{{ route('logout') }}" method="POST" class="d-inline">
                            @csrf
                            <button type="submit" class="dropdown-item">Logout</button>
                        </form>
                    </li>
                </ul>
            </li>
        </ul>
    </div>
</nav>


        <div class="content"> <!-- Main content area -->
            @yield('content') <!-- Your main content will go here -->
        </div>

        @include('partials.footer') <!-- Include the footer -->
    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert2/11.0.19/sweetalert2.min.js"></script>

    <!-- Initialize SweetAlert -->
    @if (session('success'))
        <script>
            Swal.fire({
                title: '{{ session('success') }}',
                icon: 'success',
                confirmButtonText: 'Okay'
            });
        </script>
    @endif

    @if (session('error'))
        <script>
            Swal.fire({
                title: '{{ session('error') }}',
                icon: 'error',
                confirmButtonText: 'Okay'
            });
        </script>
    @endif

    <!-- Bootstrap JS and custom scripts -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.1/js/bootstrap.bundle.min.js"></script>
    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>
