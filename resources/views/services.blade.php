@extends('layouts.app')

@section('title', 'Our Services')

@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Our Services</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <style>
        /* Main Container */
        .scrollable-container {
            width: 90%;
            max-width: 1200px;
            padding: 30px;
            margin-top: 10px;
            margin-left: auto;
            margin-right: auto;
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            grid-gap: 30px;
            animation: fadeIn 1s ease-in-out;
            margin-bottom: 20px;
        }

        .scrollable-container h2 {
            grid-column: span 2;
            text-align: center;
            color: white;
            font-weight: 700;
            margin-bottom: 20px;
        }

        /* Service Item Styling */
        .service-item {
            display: flex;
            align-items: center;
            background-color: #333;
            border-radius: 8px;
            padding: 15px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s ease;
            cursor: pointer;
        }

        .service-item:hover {
            transform: translateY(-5px);
            box-shadow: 0 8px 12px rgba(0, 0, 0, 0.15);
        }

        /* Icon and Text Styling */
        .service-item i {
            font-size: 1.8em;
            margin-right: 15px;
        }

        .service-item h3 {
            color: #d1cdcf;
            font-size: 1.3em;
            margin: 0;
        }

        .service-item p {
            margin: 5px 0 0;
            color: #35966e;
            line-height: 1.5em;
        }

        /* Specific Icon Colors */
        .service-item i.fas.fa-code { color: #ff5733; }
        .service-item i.fab.fa-laravel { color: #ff6347; }
        .service-item i.fas.fa-database { color: #28a745; }
        .service-item i.fas.fa-cloud-upload-alt { color: #17a2b8; }
        .service-item i.fas.fa-vial { color: #ffc107; }
        .service-item i.fas.fa-tools { color: #007bff; }

        /* Mobile Responsiveness */
        @media (max-width: 768px) {
            .scrollable-container {
                padding: 20px;
                grid-template-columns: 1fr; /* Single column on smaller screens */
            }

            .service-item i {
                font-size: 1.6em;
            }

            .service-item h3 {
                font-size: 1.1em;
            }

            .service-item p {
                font-size: 0.9em;
            }
        }

        /* Animation for Fade-in */
        @keyframes fadeIn {
            from { opacity: 0; transform: translateY(20px); }
            to { opacity: 1; transform: translateY(0); }
        }
        h2{
            margin-top:70px;
            color:lightblue;
            font-size: 2.3em;
            text-align:center;
            
        }
    </style>
</head>
<body>
<h2>Our Services</h2>
<div class="scrollable-container">
   
    <div class="service-item">
        <i class="fas fa-code"></i>
        <div>
            <h3>Web Application Development in Core PHP</h3>
            <p>Building custom web applications with Core PHP to deliver high performance and tailored solutions for your business needs.</p>
        </div>
    </div>
    <div class="service-item">
        <i class="fab fa-laravel"></i>
        <div>
            <h3>Laravel Framework Expertise</h3>
            <p>Utilizing the power of Laravel for scalable, secure, and elegant web applications that are easy to maintain and extend.</p>
        </div>
    </div>
    <div class="service-item">
        <i class="fas fa-database"></i>
        <div>
            <h3>Database Management with MySQL</h3>
            <p>Implementing and optimizing MySQL databases to ensure data integrity, high performance, and seamless data handling.</p>
        </div>
    </div>
    <div class="service-item">
        <i class="fas fa-cloud-upload-alt"></i>
        <div>
            <h3>Deployment and Hosting</h3>
            <p>Deploying applications efficiently on robust servers to provide a seamless experience for end-users worldwide.</p>
        </div>
    </div>
    <div class="service-item">
        <i class="fas fa-vial"></i>
        <div>
            <h3>Comprehensive Testing</h3>
            <p>Ensuring high-quality applications through rigorous testing, including functional, performance, and security assessments.</p>
        </div>
    </div>
    <div class="service-item">
        <i class="fas fa-tools"></i>
        <div>
            <h3>Ongoing Maintenance and Support</h3>
            <p>Providing reliable maintenance and support to keep applications updated, secure, and fully optimized over time.</p>
        </div>
    </div>
</div>

</body>
</html>
@endsection
