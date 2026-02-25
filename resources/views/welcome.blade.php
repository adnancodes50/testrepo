<!DOCTYPE html>
<html lang="en">
    <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FitMaker - Transform Your Body</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
    </head>
<body>
    <!-- Header -->
    <header class="header">
        <div class="container">
            <div class="header-content">
                <!-- Logo -->
                <div class="logo">
                    <div class="logo-text">
                        <span class="fit">Fit</span>
                        <span class="maker">Maker</span>
                    </div>
                    <div class="tagline">Transform Your Body</div>
                </div>

                <!-- Mobile Controls (Search + Toggle) -->
                <div class="mobile-controls">
                    <div class="mobile-menu-toggle">
                        <span></span>
                        <span></span>
                        <span></span>
                    </div>
                </div>

                <!-- Navigation -->
                <nav class="nav">
                    <ul class="nav-list">
                        <li><a href="#" class="nav-link active">Home</a></li>
                        <li><a href="#" class="nav-link">Programs <i class="fas fa-chevron-down"></i></a></li>
                        <li><a href="#" class="nav-link">Coaching <i class="fas fa-chevron-down"></i></a></li>
                        <li><a href="#" class="nav-link">Membership</a></li>
                        <li><a href="#" class="nav-link">About Us</a></li>
                    </ul>
                </nav>

                <!-- Auth Buttons -->
                <div class="auth-buttons">
                    <button class="btn btn-outline">Login</button>
                    <button class="btn btn-primary">Sign Up</button>
                </div>
            </div>
        </div>
        </header>

    <!-- Main Content -->
    <main class="main">
        <div class="container">
            <div class="hero-section">
                <!-- Left Content -->
                <div class="hero-content">
                    <h1 class="hero-title">
                        <span class="title-line">Achieve Your</span>
                        <span class="title-main">
                            <span class="fitness">FITNESS</span>
                            <span class="goals">GOALS</span>
                                </span>
                        <span class="title-sub">With FitMaker</span>
                    </h1>

                    <p class="hero-description">
                        Join The Fitmaker Community And Transform Your Fitness Journey. Our Expert Coaches And Personalized Programs Are Designed To Help You Achieve Your Goals And Exceed Your Expectations. Ready To Make A Change?
                    </p>

                    <div class="hero-buttons">
                        <button class="btn btn-primary btn-large">Start Your Journey</button>
                        <button class="btn btn-outline btn-large">Explore Programs</button>
                    </div>
                </div>

                <!-- Right Content -->
                <div class="hero-visual">
                    <div class="hero-image">
                        <img src="{{ asset('images/hero.png') }}" alt="Fitness Professional" class="main-image">

                        <!-- Statistics Cards -->
                        <div class="stats-card stats-1">
                            <span class="stats-text">+ 1300 Positive Reviews</span>
                        </div>
                        <div class="stats-card stats-2">
                            <span class="stats-text">+ 80 Coaches</span>
                        </div>
                        <div class="stats-card stats-3">
                            <span class="stats-text">+ 1000 Workout Videos</span>
                        </div>
                        <div class="stats-card stats-4">
                            <span class="stats-text">+ 1500 Trainers</span>
                        </div>
                    </div>
                </div>
            </div>
                </div>
            </main>

    <!-- Background Effects -->
    <div class="bg-effects">
        <div class="glow-circle circle-1"></div>
        <div class="glow-circle circle-2"></div>
        <div class="glow-circle circle-3"></div>
        </div>

    <script src="{{ asset('js/app.js') }}"></script>
    </body>
</html>
