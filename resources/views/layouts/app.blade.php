<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laravel Website</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
</head>
<body>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

    <!-- Navigation Bar -->
    <nav class="navbar navbar-expand-lg navbar-custom fixed-top">
        <div class="container">
            <a class="navbar-brand text-white" href="{{ url('/') }}">My DANIEL</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('/') }}">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('/love-letter') }}">Love Letter</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('/quiz') }}">Quiz</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('/couple-goals') }}">Prayer Petition & Goals</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('/gallery') }}">ALBUM</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('/loveTips') }}">Love Tips</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('/truthordare') }}">Truth Or Dare</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    
    <div class="container mt-4">
        @yield('content')
    </div>

</body>

<style>
/* Custom Navbar Styles */
.navbar-custom {
    background-color: #333; /* Dark background */
    color: white;
}

.navbar-custom .navbar-toggler-icon {
    background-color: #fff; /* Ensures the toggler icon is visible */
}

.navbar-custom .navbar-nav .nav-link {
    color: white;
    font-weight: bold;
    transition: color 0.3s ease;
}

.navbar-custom .navbar-nav .nav-link:hover {
    color: #ff4081; /* Change to a highlight color on hover */
}

/* Adjusting navbar brand color */
.navbar-custom .navbar-brand {
    color: white;
}

/* Body padding to adjust for fixed navbar */
body {
    padding-top: 60px; /* Push content below the fixed navbar */
}

/* Mobile menu tweaks */
@media (max-width: 767px) {
    .navbar-custom .navbar-collapse {
        background-color: #333333; /* Ensure the navbar background stays dark when collapsed */
    }

    .navbar-custom .navbar-nav .nav-link {
        color: #fff; /* Ensure links are visible when menu is toggled */
    }

    .navbar-custom .navbar-nav .nav-link:hover {
        color: #ff4081; /* Highlight color for links on hover */
    }
}
</style>
</html>
