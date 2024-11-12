<!-- resources/views/admin/dashboard.blade.php -->
@extends('layouts.admin')

@section('content')
<style>
    /* Global Styling */
    body {
        background-color: #f4f7fa;
        font-family: 'Roboto', sans-serif;
        color: #333;
        margin: 0;
        padding: 0;
        animation: fadeIn 1s ease-in-out;
    }

    /* Animations */
    @keyframes fadeIn {
        0% { opacity: 0; }
        100% { opacity: 1; }
    }

    /* Heading Styling */
    h1 {
        font-size: 2.5rem;
        font-weight: 600;
        color: #2c3e50;
        text-align: center;
        margin-bottom: 30px;
        animation: slideIn 1s ease-in-out;
    }

    @keyframes slideIn {
        0% { transform: translateY(-20px); opacity: 0; }
        100% { transform: translateY(0); opacity: 1; }
    }

    /* Card Styling */
    .card {
        transition: transform 0.3s ease, box-shadow 0.3s ease;
        cursor: pointer;
    }

    .card:hover {
        transform: scale(1.05);
        box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2);
    }

    /* Card Header Styling */
    .card-header {
        font-weight: 600;
        color: #fff;
        letter-spacing: 1px;
        font-size: 1.25rem;
    }

    .card-header.bg-primary { background-color: #3498db; }
    .card-header.bg-success { background-color: #2ecc71; }
    .card-header.bg-danger { background-color: #e74c3c; }

    /* Card Body Styling */
    .card-body {
        text-align: center;
        padding: 30px;
    }

    .display-4 {
        font-size: 3rem;
        font-weight: 700;
        color: #333;
        animation: zoomIn 1s ease-in-out;
    }

    @keyframes zoomIn {
        0% { transform: scale(0.8); opacity: 0; }
        100% { transform: scale(1); opacity: 1; }
    }

    .card-text {
        font-size: 1.1rem;
        color: #7f8c8d;
        margin-top: 10px;
    }

    /* Responsive Design */
    @media (max-width: 768px) {
        h1 {
            font-size: 1.8rem;
        }
        .display-4 {
            font-size: 2.5rem;
        }
        .card-body {
            padding: 20px;
        }
    }
</style>

<div class="container mt-5">
   
    <div class="row justify-content-center">
        <!-- Total Educations Card -->
        <div class="col-md-4 mb-4">
            <div class="card shadow-lg border-0 rounded">
                <div class="card-header bg-primary text-white text-center">
                    <h5>Total Educations</h5>
                </div>
                <div class="card-body text-center">
                    <h2 class="card-title display-4">{{ $educationCount }}</h2>
                    <p class="card-text">Total number of education records.</p>
                </div>
            </div>
        </div>

        <!-- Total Projects Card -->
        <div class="col-md-4 mb-4">
            <div class="card shadow-lg border-0 rounded">
                <div class="card-header bg-success text-white text-center">
                    <h5>Total Projects</h5>
                </div>
                <div class="card-body text-center">
                    <h2 class="card-title display-4">{{ $projectCount }}</h2>
                    <p class="card-text">Total number of project records.</p>
                </div>
            </div>
        </div>

        <!-- Total Users Card -->
        <div class="col-md-4 mb-4">
            <div class="card shadow-lg border-0 rounded">
                <div class="card-header bg-danger text-white text-center">
                    <h5>Total Users</h5>
                </div>
                <div class="card-body text-center">
                    <h2 class="card-title display-4">{{ $userCount }}</h2>
                    <p class="card-text">Total number of registered users.</p>
                </div>
            </div>
        </div>
    </div>
</div>

@section('scripts')
    <script>
        (function () {
            window.history.pushState(null, "", window.location.href);
            window.onpopstate = function () {
                window.history.pushState(null, "", window.location.href);
            };
        })();
    </script>
@endsection

@endsection
