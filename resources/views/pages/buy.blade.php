
<!DOCTYPE html>
<html lang="en">
<head >
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title >INVA PROPERTY</title>
<!-- <link href="{{ asset('build/assets/css/bootstrap.min.css') }}" rel="stylesheet" /> -->
    <!-- <link href="{{ asset('css/style.css') }}" rel="stylesheet" /> -->


    <!-- Bootstrap CSS -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>


</head>

    <header>
       <nav class="navbar fix-nav navbar-expand-lg bg-white py-3 header-shadow ">
    <div class="container">
        <a style="color:DarkBlue; font-size: 2rem;" class="navbar-brand fw-bold brand-color me-4" href="{{ route('home') }}">INVA Property</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#mainNavbar" aria-controls="mainNavbar" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <ul class="navbar-nav mb-2 mb-lg-0 gap-lg-4 mx-lg-auto">
            <li class="nav-item">
                <a style="font-size: 1.35rem;" class="nav-link fw-medium {{ request()->routeIs('home') ? 'active' : '' }}" href="{{ route('home') }}">Home</a>
            </li>
            <li class="nav-item">
                <a style="font-size: 1.35rem;" class="nav-link fw-medium {{ request()->routeIs('buy') ? 'active' : '' }}" href="{{ route('buy') }}">Buy</a>
            </li>
            <li class="nav-item">
                <a style="font-size: 1.35rem;" class="nav-link fw-medium {{ request()->routeIs('rent') ? 'active' : '' }}" href="{{ route('rent') }}">Rent</a>
            </li>
            <li class="nav-item">
                <a style="font-size: 1.35rem;" class="nav-link fw-medium {{ request()->routeIs('sell') ? 'active' : '' }}" href="{{ route('sell') }}">Sell</a>
            </li>
            <li class="nav-item">
                <a style="font-size: 1.35rem;" class="nav-link fw-medium {{ request()->routeIs('agents') ? 'active' : '' }}" href="{{ route('agents') }}">Agents</a>
            </li>
            <li class="nav-item">
                <a style="font-size: 1.35rem;" class="nav-link fw-medium {{ request()->routeIs('insights') ? 'active' : '' }}" href="{{ route('insights') }}">Insights</a>
            </li>
        </ul>

        <ul style="font-size: 1.35rem;"  class="navbar-nav align-items-lg-center ms-lg-3 gap-4">
                <li  class="nav-item d-flex align-items-center small text-body">
                    <i class="bi bi-heart me-1"></i>
                    <a  class="nav-link p-0" href="{{ route('saved') }}">Saved</a>
                </li>
                <li class="nav-item d-flex align-items-center small text-body">
                    <i class="bi bi-person me-1"></i>
                    <a class="nav-link p-0" href="{{ route('signin') }}">Sign In</a>
                </li>
                <li class="nav-item">
                    <a style="font-size: 1.35rem;" class="btn brand-btn px-4" href="{{ route('list-property') }}">List Property</a>
                </li>
            </ul>


    </div>
</nav>
</header>

<body class="bg-test">
<div class="container py-5">
    <h1 class="h3">Buy</h1>
    <p class="text-muted">Placeholder page for Buy listings.</p>
    <a class="btn btn-outline-primary" href="{{ route('home') }}">Back to Home</a>
    </div>

</body>

<footer class="bg-dark text-white pt-5 pb-3">
    <div class="container">
        <div class="row g-4">
            {{-- Column 1: PropertyHub Info --}}
            <div class="col-md-6 col-lg-3">
                <h5 class="fw-bold mb-3">PropertyHub</h5>
                <p class="text-white-50 small">
                    Your trusted partner in finding the perfect property in Singapore. We connect buyers, sellers, and renters with their ideal homes.
                </p>
                <div class="social-links d-flex gap-3 mt-3">
                    <a href="#" class="text-white-50 hover-white"><i class="bi bi-facebook fs-5"></i></a>
                    <a href="#" class="text-white-50 hover-white"><i class="bi bi-twitter fs-5"></i></a>
                    <a href="#" class="text-white-50 hover-white"><i class="bi bi-instagram fs-5"></i></a>
                    <a href="#" class="text-white-50 hover-white"><i class="bi bi-linkedin fs-5"></i></a>
                </div>
            </div>

            {{-- Column 2: Quick Links --}}
            <div class="col-md-6 col-lg-3">
                <h5 class="fw-bold mb-3">Quick Links</h5>
                <ul class="list-unstyled text-white-50 small">
                    <li class="mb-2"><a href="#" class="text-white-50 text-decoration-none">Buy Property</a></li>
                    <li class="mb-2"><a href="#" class="text-white-50 text-decoration-none">Rent Property</a></li>
                    <li class="mb-2"><a href="#" class="text-white-50 text-decoration-none">Sell Property</a></li>
                    <li class="mb-2"><a href="#" class="text-white-50 text-decoration-none">Find Agents</a></li>
                    <li class="mb-2"><a href="#" class="text-white-50 text-decoration-none">Market Insights</a></li>
                    <li class="mb-2"><a href="#" class="text-white-50 text-decoration-none">Mortgage Calculator</a></li>
                </ul>
            </div>

            {{-- Column 3: Support --}}
            <div class="col-md-6 col-lg-3">
                <h5 class="fw-bold mb-3">Support</h5>
                <ul class="list-unstyled text-white-50 small">
                    <li class="mb-2"><a href="#" class="text-white-50 text-decoration-none">Help Center</a></li>
                    <li class="mb-2"><a href="#" class="text-white-50 text-decoration-none">About Us</a></li>
                    <li class="mb-2"><a href="#" class="text-white-50 text-decoration-none">Contact Us</a></li>
                    <li class="mb-2"><a href="#" class="text-white-50 text-decoration-none">Terms of Service</a></li>
                    <li class="mb-2"><a href="#" class="text-white-50 text-decoration-none">Privacy Policy</a></li>
                    <li class="mb-2"><a href="#" class="text-white-50 text-decoration-none">Cookie Policy</a></li>
                    <li class="mb-2"><a href="#" class="text-white-50 text-decoration-none">Sitemap</a></li>
                </ul>
            </div>

            {{-- Column 4: Contact Info --}}
            <div class="col-md-6 col-lg-3">
                <h5 class="fw-bold mb-3">Contact Info</h5>
                <ul class="list-unstyled text-white-50 small">
                    <li class="mb-2"><i class="bi bi-geo-alt-fill me-2"></i> 123 Marina Bay Street<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Singapore 018956</li>
                    <li class="mb-2"><i class="bi bi-phone-fill me-2"></i> +65 6123 4567</li>
                    <li class="mb-2"><i class="bi bi-envelope-fill me-2"></i> hello@propertyhub.sg</li>
                </ul>
            </div>
        </div>

        <hr class="mt-4 mb-3 border-secondary">

        {{-- Bottom Footer --}}
        <div class="row align-items-center">
            <div class="col-md-6 text-center text-md-start small text-white-50">
                &copy; 2025 PropertyHub. All rights reserved.
            </div>
            <div class="col-md-6 text-center text-md-end small">
                <a href="#" class="text-white-50 text-decoration-none ms-3">Terms</a>
                <a href="#" class="text-white-50 text-decoration-none ms-3">Privacy</a>
                <a href="#" class="text-white-50 text-decoration-none ms-3">Cookies</a>
            </div>
        </div>
    </div>
</footer>
<script src="{{ asset('build/assets/js/bootstrap.bundle.min.js') }}"></script>
</html>
