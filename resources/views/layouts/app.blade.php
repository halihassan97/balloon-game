<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title', 'Thorn and Balloons – Play Free Online Puzzle Game')</title>

    <!-- SEO Meta -->
    <meta name="description" content="@yield('meta_description', 'Play Thorn and Balloons, a fun and addictive puzzle game where you pop balloons using a thorn ball. Free to play online!')">

    <!-- Open Graph -->
    <meta property="og:title" content="Thorn and Balloons – Play Free Online Puzzle Game">
    <meta property="og:description" content="Enjoy Thorn and Balloons, a free puzzle game where you burst balloons with a thorn ball. Play now on mobile and desktop!">
    <meta property="og:image" content="https://thornandballoons.com.co/images/logo.png">
    <meta property="og:url" content="https://thornandballoons.com.co/">
    <meta property="og:type" content="website">

    <!-- Twitter Card -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Thorn and Balloons – Free Puzzle Game">
    <meta name="twitter:description" content="Play Thorn and Balloons online! Pop balloons using a thorn ball in this addictive free puzzle game.">
    <meta name="twitter:image" content="https://thornandballoons.com.co/images/logo.png">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Favicon -->
    <link rel="icon" href="{{ asset('users/images/thron-and-balloons-icon.webp') }}" type="image/x-icon">
    <!-- Icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">

    <style>
        :root {
            --primary: #e74c3c;   /* red accent */
            --secondary: #2980b9; /* blue accent */
            --purple: #8e44ad;    /* purple accent */
            --text-dark: #1f2937;
            --text-light: #6b7280;
            --bg-light: #ffffff;
            --bg-section: #f9fafb;
        }

        body {
            background: var(--bg-light);
            color: var(--text-dark);
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }

        /* Navbar */
        .navbar {
            background: var(--bg-light);
            box-shadow: 0 2px 6px rgba(0,0,0,0.05);
        }
        .nav-link {
            color: var(--text-dark) !important;
            font-weight: 500;
            margin-left: 15px;
        }
        .nav-link:hover {
            color: var(--primary) !important;
        }

        /* Hero */
        .hero-section {
            padding: 80px 20px;
            background: var(--bg-light);
            text-align: center;
        }
        .hero-title {
            font-size: 3rem;
            font-weight: 800;
            color: var(--primary);
        }
        .hero-subtitle {
            font-size: 1.2rem;
            color: var(--text-light);
            max-width: 1000px;
            margin: 0 auto 2rem;
        }
        .btn-play {
            padding: 12px 30px;
            font-size: 1.1rem;
            font-weight: bold;
            border-radius: 8px;
            background: var(--secondary);
            color: white;
            transition: all 0.3s ease;
            border: none;
        }
        .btn-play:hover {
            opacity: 0.9;
            transform: scale(1.05);
        }

        /* Game section */
        .game-section {
            background: var(--bg-section);
            padding: 50px 20px;
        }
        .game-container {
            background: #fff;
            border-radius: 12px;
            overflow: hidden;
            box-shadow: 0 6px 20px rgba(0,0,0,0.1);
            margin-bottom: 30px;
        }
        .game-header {
            background: var(--secondary);
            color: white;
            padding: 15px 20px;
            font-weight: 600;
        }
        .game-iframe {
            width: 100%;
            height: 600px;
            border: none;
        }

        /* FAQ */
        .faq-section {
            padding: 60px 20px;
            background: #fff;
        }
        .faq-section h2 {
            color: var(--primary);
            text-align: center;
            margin-bottom: 40px;
            font-weight: 700;
        }
        .faq-item {
            margin-bottom: 25px;
        }
        .faq-item h5 {
            font-weight: 600;
            margin-bottom: 8px;
        }

        /* Footer */
        .footer {
            background: var(--bg-section);
            color: var(--text-light);
            padding: 40px 0;
            text-align: center;
        }

        @media (max-width: 768px) {
            .hero-title {
                font-size: 2.2rem;
            }
            .game-iframe {
                height: 400px;
            }
        }
    </style>
</head>
<body>
<!-- Navigation -->
{{--<nav class="navbar navbar-expand-lg">--}}
{{--    <div class="container">--}}
{{--        <a class="navbar-brand fw-bold" href="{{ route('home') }}">--}}
{{--            <img src="{{ asset('images/thorn-and-balloons.webp') }}" alt="Thorn and Balloons Logo" style="width: 200px;">--}}
{{--        </a>--}}
{{--        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">--}}
{{--            <span class="navbar-toggler-icon"></span>--}}
{{--        </button>--}}
{{--        <div class="collapse navbar-collapse" id="navbarNav">--}}
{{--            <ul class="navbar-nav ms-auto">--}}
{{--                <li class="nav-item"><a class="nav-link" href="{{ route('home') }}">Home</a></li>--}}
{{--                <li class="nav-item"><a class="nav-link" href="{{ route('about') }}">About</a></li>--}}
{{--                <li class="nav-item"><a class="nav-link" href="{{ route('blog.index') }}">Blog</a></li>--}}
{{--                <li class="nav-item"><a class="nav-link" href="{{ route('contact') }}">Contact</a></li>--}}
{{--            </ul>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--</nav>--}}

<main>
    @yield('content')
</main>

<!-- Footer -->
<footer class="footer">
    <div class="container">
        <p>&copy; 2025 Thorn & Balloons. All rights reserved.</p>
        <div class="mt-3">
            <a href="#" class="text-dark me-3"><i class="fab fa-facebook-f"></i></a>
            <a href="#" class="text-dark me-3"><i class="fab fa-twitter"></i></a>
            <a href="#" class="text-dark"><i class="fab fa-instagram"></i></a>
        </div>
    </div>
</footer>

<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

{{-- TinyMCE Script --}}
<script src="https://cdn.tiny.cloud/1/wnthfi7i9jza8njpdqi3w2dc7flbz475takek622jsl7b0sz/tinymce/6/tinymce.min.js" referrerpolicy="origin"></script>
<script>
    tinymce.init({
        selector: '#content',
        plugins: 'link image code lists media table',
        toolbar: 'undo redo | styles | bold italic underline | alignleft aligncenter alignright | bullist numlist | link image media | code',
        menubar: false,
        height: 400
    });
</script>
</body>
</html>
