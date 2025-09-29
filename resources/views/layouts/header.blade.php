<nav class="navbar fix-nav navbar-expand-lg bg-white py-3 header-shadow ">
    <div class="container">
        <a style="color:DarkBlue; font-size: 2rem;" class="navbar-brand fw-bold brand-color me-4" href="{{ route('home') }}">INVA Property</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#mainNavbar" aria-controls="mainNavbar" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="mainNavbar">
            <ul class="navbar-nav mb-2 mb-lg-0 gap-lg-4 mx-lg-auto">
                <li style="font-size: 1.35rem;" class="nav-item"><a class="nav-link fw-medium" href="{{ route('home') }}">Home</a></li>
                <li style="font-size: 1.35rem;" class="nav-item"><a class="nav-link fw-medium" href="{{ route('buy') }}">Buy</a></li>
                <li style="font-size: 1.35rem;"  class="nav-item"><a class="nav-link fw-medium" href="{{ route('rent') }}">Rent</a></li>
                <li style="font-size: 1.35rem;"  class="nav-item"><a class="nav-link fw-medium" href="{{ route('sell') }}">Sell</a></li>
                <li style="font-size: 1.35rem;"  class="nav-item"><a class="nav-link fw-medium" href="{{ route('agents') }}">Agents</a></li>
                <li style="font-size: 1.35rem;"  class="nav-item"><a class="nav-link fw-medium" href="{{ route('insights') }}">Insights</a></li>
            </ul>
            <ul style="font-size: 1.35rem;" class="navbar-nav align-items-lg-center ms-lg-3 gap-4">
                <li class="nav-item d-flex align-items-center small text-body">
                    <i class="bi bi-heart me-1"></i>
                    <a class="nav-link p-0" href="{{ route('saved') }}">Saved</a>
                </li>
                <li class="nav-item d-flex align-items-center small text-body">
                    <i class="bi bi-person me-1"></i>
                    <a class="nav-link p-0" href="{{ route('signin') }}">Sign In</a>
                </li>
                <li class="nav-item">
                    <a style="font-size: 1.30rem;" class="btn brand-btn px-4" href="{{ route('list-property') }}">List Property</a>
                </li>
            </ul>
        </div>
    </div>
</nav>

