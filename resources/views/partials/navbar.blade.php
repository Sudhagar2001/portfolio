<!-- resources/views/partials/navbar.blade.php -->
 <style>
    /* public/css/app.css */
.navbar {
    padding: 1rem; /* Adds padding to the navbar */
}

.nav-link {
    transition: color 0.3s; /* Smooth transition for hover effect */
}

.nav-link:hover {
    color: #007bff; /* Change link color on hover */
    text-decoration: underline; /* Underline effect on hover */
}

.navbar-brand {
    font-weight: bold; /* Bold font for brand name */
    font-size: 1.5rem; /* Slightly larger font size for brand */
}

/* Responsive design adjustments */
@media (max-width: 768px) {
    .navbar {
        padding: 0.5rem; /* Adjust padding for smaller screens */
    }
}
</style>
<nav class="navbar navbar-expand-lg navbar-light bg-light shadow-sm">
    <div class="container">
        <a class="navbar-brand" href="{{ route('home') }}">My Application</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('home') }}">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('about') }}">About</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('contact') }}">Contact</a>
                </li>
                <!-- Add more links as needed -->
            </ul>
        </div>
    </div>
</nav>
