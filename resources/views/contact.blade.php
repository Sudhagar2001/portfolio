@extends('layouts.app')

@section('title', 'Contact')

@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Information</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <style>
        /* Contact Container */
        .contact-container {
            max-width: 900px;
            margin: 50px auto;
            padding: 20px;
        }

        /* Contact Header */
        .contact-container h2 {
            text-align: center;
            color: white;
            font-weight: 700;
            font-size: 2rem;
            margin-bottom: 30px;
            animation: fadeIn 1s ease-out;
        }

        /* Grid Layout for Contact Items */
        .contact-info {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(300px, 1fr));
            gap: 30px;
            justify-items: center;
            animation: fadeIn 1.5s ease-out;
        }

        /* Animation for Fade-in */
        @keyframes fadeIn {
            from { opacity: 0; transform: translateY(20px); }
            to { opacity: 1; transform: translateY(0); }
        }

        /* Individual Contact Item */
        .contact-item {
            border-radius: 10px;
            padding: 20px;
            display: flex;
            align-items: center;
            background-color: #333;
            color: #9dbebf;
            width: 100%;
            max-width: 450px;
            transition: transform 0.3s ease, box-shadow 0.3s ease;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            cursor: pointer;
            opacity: 0;
            animation: slideIn 0.5s forwards;
        }

        /* Slide-in animation for contact items */
        @keyframes slideIn {
            0% { opacity: 0; transform: translateY(20px); }
            100% { opacity: 1; transform: translateY(0); }
        }

        .contact-item:hover {
            transform: translateY(-5px);
            box-shadow: 0 6px 12px rgba(0, 0, 0, 0.15);
        }

        /* Icon Styling */
        .contact-item i {
            font-size: 2em;
            margin-right: 15px;
        }

        .contact-item span {
            font-size: 1.1em;
            font-weight: 600;
        }

        /* Icon Color Changes */
        .contact-item.email i { color: #007bff; } /* Blue */
        .contact-item.instagram i { color: #e1306c; } /* Instagram */
        .contact-item.linkedin i { color: #0e76a8; } /* LinkedIn */
        .contact-item.google i { color: #db4437; } /* Google */
        .contact-item.whatsapp i { color: #25d366; } /* WhatsApp */

        /* Mobile Responsiveness */
        @media (max-width: 768px) {
            .contact-container {
                padding: 20px;
            }
            .contact-info {
                grid-template-columns: 1fr; /* Single column for small screens */
            }
            .contact-item i { font-size: 1.6em; }
            .contact-item span { font-size: 1em; }
        }
    </style>
</head>
<body>

<div class="contact-container">
    <h2>Contact Information</h2>
    <div class="contact-info">
        @if($contact)
            <!-- Email -->
            @if($contact->email)
                <div class="contact-item email">
                    <i class="fas fa-envelope"></i>
                    <span>{{ $contact->email }}</span>
                </div>
            @endif

            <!-- Instagram -->
            @if($contact->instagram)
                <div class="contact-item instagram">
                    <i class="fab fa-instagram"></i>
                    <span>{{ $contact->instagram }}</span>
                </div>
            @endif

            <!-- LinkedIn -->
            @if($contact->linkedin)
                <div class="contact-item linkedin">
                    <i class="fab fa-linkedin"></i>
                    <span>{{ $contact->linkedin }}</span>
                </div>
            @endif

            <!-- Google -->
            @if($contact->google)
                <div class="contact-item google">
                    <i class="fab fa-google"></i>
                    <span>{{ $contact->google }}</span>
                </div>
            @endif

            <!-- WhatsApp -->
            @if($contact->whatsapp)
                <div class="contact-item whatsapp">
                    <i class="fab fa-whatsapp"></i>
                    <span>{{ $contact->whatsapp }}</span>
                </div>
            @endif
        @else
            <p style="text-align: center; color: #888;">No contact details available.</p>
        @endif
    </div>
</div>

</body>
</html>
@endsection
