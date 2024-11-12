
<!-- CSS Styling -->
<style>
    /* Footer Container */
    .footer {
        background-color: #333;
        color: #fff;
        padding: 20px 0;
        position: fixed;
        bottom: 0;
        width: 100%;
        text-align: center;
    }
    
    /* Footer Content Layout */
    .footer-container {
        display: flex;
        flex-direction: column;
        align-items: center;
        max-width: 1200px;
        margin: auto;
        padding: 20px;
    }

    /* Footer Logo Section */
    .footer-logo h3 {
        font-size: 1.5rem;
        margin: 0;
    }
    .footer-logo p {
        font-size: 0.9rem;
        color: #ddd;
    }

    /* Footer Links */
    .footer-links {
        display: flex;
        gap: 15px;
        margin: 10px 0;
        flex-wrap: wrap;
        justify-content: center;
    }
    .footer-links a {
        color: #ddd;
        text-decoration: none;
        font-size: 0.9rem;
    }
    .footer-links a:hover {
        color: #1e90ff;
    }

    /* Social Media Icons */
    .footer-socials {
        display: flex;
        gap: 15px;
        margin-top: 10px;
    }
    .social-icon {
        color: #ddd;
        font-size: 1.2rem;
        transition: color 0.3s ease;
    }
    .social-icon:hover {
        color: #1e90ff;
    }

    /* Footer Bottom */
    .footer-bottom {
        font-size: 0.8rem;
        color: #bbb;
        margin-top: 15px;
    }

    /* Responsive Layout */
    @media (min-width: 768px) {
        .footer-container {
            flex-direction: row;
            justify-content: space-between;
        }
    }
</style>

<!-- FontAwesome Icons CDN -->
<script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
<footer class="bg-dark text-white text-center">
    <div class="container">
        <p class="mb-0">&copy; {{ date('Y') }} My Application. All rights reserved.</p>
        <ul class="list-inline mb-0">
            <li class="list-inline-item">
                <a class="text-white" href="#">Privacy Policy</a>
            </li>
            <li class="list-inline-item">
                <a class="text-white" href="#">Terms of Service</a>
            </li>
            <li class="list-inline-item">
                <a class="text-white" href="{{ route('contact') }}">Contact Us</a>
            </li>
        </ul>
        <div class="social-icons mt-3">
        <a href="mailto:sudhagarlives123@gmail.com" target="_blank" class="text-white me-2">
    <i class="fas fa-envelope"></i>
</a>

            <a href="#" target="_blank" class="text-white me-2"><i class="fab fa-google"></i></a>
            <a href="#" target="_blank" class="text-white me-2"><i class="fab fa-instagram"></i></a>
            <a href="https://www.linkedin.com/in/sudhagar-c-4160bb267/" target="_blank" class="text-white"><i class="fab fa-linkedin"></i></a>
        </div>
    </div>
</footer>
