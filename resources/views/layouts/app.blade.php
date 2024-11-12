<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Portfolio')</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <!-- Include Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    <!-- jQuery and Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXlJ/PF9iUcOcw+qn0V7QB6XTTw3NxQK6AOW5onq2z9uAkz9FvfxrgoTfS3z" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTpD6cd4uw2MJlgDgFas54B1Pt7QQo46I1Q1F2XycKjp9F0QpP" crossorigin="anonymous"></script>
</head>
<body class="d-flex flex-column min-vh-100">

    <!-- Header / Navbar -->
    @include('partials.header')
    
    <div class="flex-grow-1"> <!-- Main content area -->
        @yield('content') <!-- Your main content will go here -->
    </div>

    @include('partials.footer') <!-- Include the footer -->
</body>
</html>
