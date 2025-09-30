@extends('layouts.app')

@section('content')
<section class="hero-bg d-flex align-items-center" style="min-height: 90vh; background: url('https://plus.unsplash.com/premium_photo-1680806491608-af096f1fc916?q=80&w=2340&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D') no-repeat center / cover;">
    <div class="container hero-content text-white">
        <div class="row justify-content-center text-center g-4">
            <div class="col-12 col-lg-10 col-xxl-9">
                <h1 class="fw-bold mb-2 display-3 hero-heading">Find Your Perfect</h1>
                <h2 class="fw-bold mb-3 display-5 opacity-75 hero-subheading">Dream Home</h2>
                <p class="lead mb-4 hero-lead">Discover thousands of properties for sale and rent in Singapore's most desirable locations</p>
            </div>
            <div class="col-12 col-xl-10">
                <div class="card shadow-lg border-0 rounded-3 search-card mx-auto">
                    <div class="card-body p-3 p-lg-4">
                        <ul class="nav nav-pills justify-content-between bg-light rounded-3 px-2 py-2 mb-3" id="searchTab" role="tablist">
                            <li class="nav-item w-50 pe-1" role="presentation">
                                <button class="nav-link active w-100" id="buy-tab" data-bs-toggle="pill" data-bs-target="#buy-pane" type="button" role="tab" aria-controls="buy-pane" aria-selected="true">Buy</button>
                            </li>
                            <li class="nav-item w-50 ps-1" role="presentation">
                                <button class="nav-link w-100" id="rent-tab" data-bs-toggle="pill" data-bs-target="#rent-pane" type="button" role="tab" aria-controls="rent-pane" aria-selected="false">Rent</button>
                            </li>
                        </ul>
                        <div class="tab-content" id="searchTabContent">
                            <div class="tab-pane fade show active" id="buy-pane" role="tabpanel" aria-labelledby="buy-tab" tabindex="0">
                                <form class="row g-2 g-md-3 align-items-stretch">
                                    <div class="col-12 col-md-5">
                                        <input type="text" class="form-control form-control-ml" placeholder="Location (e.g., Phnom Penh)">
                                    </div>
                                    <div class="col-12 col-sm-6 col-md-3">
                                        <select class="form-select form-select-ml">
                                            <option selected>Property Type</option>
                                            <option>Apartment</option>
                                            <option>Condo</option>
                                            <option>House</option>
                                        </select>
                                    </div>
                                    <div class="col-12 col-sm-6 col-md-3">
                                        <select class="form-select form-select-ml">
                                            <option selected>Price Range</option>
                                            <option>$0 - $1,000</option>
                                            <option>$1,000 - $3,000</option>
                                            <option>$3,000+</option>
                                        </select>
                                    </div>
                                    <div class="col-12 col-md-1 d-grid d-md-block">
                                        <button type="button" class="btn btn-ml btn-dark w-120">Search</button>
                                    </div>
                                </form>
                            </div>
                            <div class="tab-pane fade" id="rent-pane" role="tabpanel" aria-labelledby="rent-tab" tabindex="0">
                                <form class="row g-2 g-md-3 align-items-stretch">
                                    <div class="col-12 col-md-5">
                                        <input type="text" class="form-control form-control-ml" placeholder="City or District">
                                    </div>
                                    <div class="col-12 col-sm-6 col-md-3">
                                        <select class="form-select form-select-ml">
                                            <option selected>Property Type</option>
                                            <option>Studio</option>
                                            <option>Apartment</option>
                                            <option>Condo</option>
                                        </select>
                                    </div>
                                    <div class="col-12 col-sm-6 col-md-3">
                                        <select class="form-select form-select-ml">
                                            <option selected>Monthly Budget</option>
                                            <option>$500 - $1,000</option>
                                            <option>$1,000 - $2,000</option>
                                            <option>$2,000+</option>
                                        </select>
                                    </div>
                                    <div class="col-12 col-md-1 d-grid d-md-block">
                                        <button type="button" class="btn btn-ml btn-dark ">Search</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12">
                <div class="row text-center text-white mt-4 gy-4">
                    <div class="col-12 col-md-4">
                        <div class="stat-item">
                            <div class="display-6 fw-bold">50K+</div>
                            <div class="opacity-75">Properties Listed</div>
                        </div>
                    </div>
                    <div class="col-12 col-md-4">
                        <div class="stat-item">
                            <div class="display-6 fw-bold">1K+</div>
                            <div class="opacity-75">Verified Agents</div>
                        </div>
                    </div>
                    <div class="col-12 col-md-4">
                        <div class="stat-item">
                            <div class="display-6 fw-bold">10K+</div>
                            <div class="opacity-75">Happy Customers</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<!-- Buy -->
<section class="py-5">
    <div class="container">
        <h2 class="text-center fw-bold mb-1">Featured Properties</h2>
        <p class="text-center text-secondary mb-5">Discover our handpicked selection of premium properties available for sale and rent</p>
        <div class="row g-4 justify-content-center">

            {{-- Property Card 1 (Sale) --}}
            <div class="col-12 col-sm-6 col-lg-3 d-flex">
                <div class="card property-card shadow-sm border-0 w-100">
                    <div class="position-relative">
                        {{-- Placeholder Image (Use your own image URL) --}}
                        <img src="https://www.movemeto.com/ontario/img/luxury-homes-for-sale.jpg" class="card-img-top property-img" alt="Modern 3-Bedroom Condo" style="height: 200px; object-fit: cover;">
                        <span class="badge bg-primary text-white position-absolute top-0 start-0 m-2">Featured</span>
                        <span class="badge bg-success text-white position-absolute top-0 start-0 ms-auto m-2" style="left: 65px!important;">For Sale</span>
                        <button class="btn btn-light btn-sm position-absolute top-0 end-0 m-2 rounded-circle shadow-sm" aria-label="Add to favorites">
                            <i class="bi bi-heart"></i>
                            <>
                    </div>
                    <div class="card-body">
                        <h4 class="card-title h5 fw-bold text-dark mb-1">$1,200,000</h4>
                        <p class="card-text mb-2 fw-semibold">Modern 3-Bedroom Condo with City Views</p>
                        <p class="text-secondary mb-3"><i class="bi bi-geo-alt-fill me-1"></i> Marina Bay, District 1</p>
                        <div class="d-flex justify-content-between text-secondary mb-3 small">
                            <span><i class="bi bi-house-door me-1"></i> 3</span>
                            <span><i class="bi bi-rulers me-1"></i> 2</span>
                            <span><i class="bi bi-car me-1"></i> 1</span>
                            <span><i class="bi bi-square-fill me-1"></i> 1,200 sqft</span>
                        </div>
                        <div class="d-flex gap-2">
                            <a href="#" class="btn btn-outline-dark btn-sm flex-fill">View Details</a>
                            <a href="#" class="btn btn-dark btn-sm flex-fill">Contact Agent</a>
                        </div>
                    </div>
                </div>
            </div>
            {{-- Property Card 2 (Sale - HDB) --}}
            <div class="col-12 col-sm-6 col-lg-3 d-flex">
                <div class="card property-card shadow-sm border-0 w-100">
                    <div class="position-relative">
                        {{-- Placeholder Image (Use your own image URL) --}}
                        <img src="https://www.movemeto.com/ontario/img/luxury-homes-for-sale.jpg" class="card-img-top property-img" alt="Modern 3-Bedroom Condo" style="height: 200px; object-fit: cover;">
                        <span class="badge bg-primary text-white position-absolute top-0 start-0 m-2">Featured</span>
                        <span class="badge bg-success text-white position-absolute top-0 start-0 ms-auto m-2" style="left: 65px!important;">For Sale</span>
                        <button class="btn btn-light btn-sm position-absolute top-0 end-0 m-2 rounded-circle shadow-sm" aria-label="Add to favorites">
                            <i class="bi bi-heart"></i>
                             <>
                        </button>
                    </div>
                    <div class="card-body">
                        <h4 class="card-title h5 fw-bold text-dark mb-1">$1,200,000</h4>
                        <p class="card-text mb-2 fw-semibold">Modern 3-Bedroom Condo with City Views</p>
                        <p class="text-secondary mb-3"><i class="bi bi-geo-alt-fill me-1"></i> Marina Bay, District 1</p>
                        <div class="d-flex justify-content-between text-secondary mb-3 small">
                            <span><i class="bi bi-house-door me-1"></i> 3</span>
                            <span><i class="bi bi-rulers me-1"></i> 2</span>
                            <span><i class="bi bi-car me-1"></i> 1</span>
                            <span><i class="bi bi-square-fill me-1"></i> 1,200 sqft</span>
                        </div>
                        <div class="d-flex gap-2">
                            <a href="#" class="btn btn-outline-dark btn-sm flex-fill">View Details</a>
                            <a href="#" class="btn btn-dark btn-sm flex-fill">Contact Agent</a>
                        </div>
                    </div>
                </div>
            </div>

            {{-- Property Card 3 (Sale - HDB) --}}
            <div class="col-12 col-sm-6 col-lg-3 d-flex">
                <div class="card property-card shadow-sm border-0 w-100">
                    <div class="position-relative">
                        {{-- Placeholder Image (Use your own image URL) --}}
                        <img src="https://www.movemeto.com/ontario/img/luxury-homes-for-sale.jpg" class="card-img-top property-img" alt="Cozy 2-Bedroom HDB" style="height: 200px; object-fit: cover;">
                        <span class="badge bg-primary text-white position-absolute top-0 start-0 m-2">Featured</span>
                        <span class="badge bg-success text-white position-absolute top-0 start-0 ms-auto m-2" style="left: 65px!important;">For Sale</span>
                        <button class="btn btn-light btn-sm position-absolute top-0 end-0 m-2 rounded-circle shadow-sm" aria-label="Add to favorites">
                            <i class="bi bi-heart"></i>
                             <>
                        </button>
                    </div>
                    <div class="card-body">
                        <h4 class="card-title h5 fw-bold text-dark mb-1">$450,000</h4>
                        <p class="card-text mb-2 fw-semibold">Cozy 2-Bedroom HDB in Mature Estate</p>
                        <p class="text-secondary mb-3"><i class="bi bi-geo-alt-fill me-1"></i> Toa Payoh, District 12</p>
                        <div class="d-flex justify-content-between text-secondary mb-3 small">
                            <span><i class="bi bi-house-door me-1"></i> 2</span>
                            <span><i class="bi bi-rulers me-1"></i> 1</span>
                            <span><i class="bi bi-car me-1"></i> 0</span>
                            <span><i class="bi bi-square-fill me-1"></i> 850 sqft</span>
                        </div>
                        <div class="d-flex gap-2">
                            <a href="#" class="btn btn-outline-dark btn-sm flex-fill">View Details</a>
                            <a href="#" class="btn btn-dark btn-sm flex-fill">Contact Agent</a>
                        </div>
                    </div>
                </div>
            </div>
            {{-- Property Card 4 (Sale - HDB) --}}
           <div class="col-12 col-sm-6 col-lg-3 d-flex">
                <div class="card property-card shadow-sm border-0 w-100">
                    <div class="position-relative">
                        {{-- Placeholder Image (Use your own image URL) --}}
                        <img src="https://www.movemeto.com/ontario/img/luxury-homes-for-sale.jpg" class="card-img-top property-img" alt="Modern 3-Bedroom Condo" style="height: 200px; object-fit: cover;">
                        <span class="badge bg-primary text-white position-absolute top-0 start-0 m-2">Featured</span>
                        <span class="badge bg-success text-white position-absolute top-0 start-0 ms-auto m-2" style="left: 65px!important;">For Sale</span>
                        <button class="btn btn-light btn-sm position-absolute top-0 end-0 m-2 rounded-circle shadow-sm" aria-label="Add to favorites">
                            <i class="bi bi-heart"></i>
                             <>
                        </button>
                    </div>
                    <div class="card-body">
                        <h4 class="card-title h5 fw-bold text-dark mb-1">$1,200,000</h4>
                        <p class="card-text mb-2 fw-semibold">Modern 3-Bedroom Condo with City Views</p>
                        <p class="text-secondary mb-3"><i class="bi bi-geo-alt-fill me-1"></i> Marina Bay, District 1</p>
                        <div class="d-flex justify-content-between text-secondary mb-3 small">
                            <span><i class="bi bi-house-door me-1"></i> 3</span>
                            <span><i class="bi bi-rulers me-1"></i> 2</span>
                            <span><i class="bi bi-car me-1"></i> 1</span>
                            <span><i class="bi bi-square-fill me-1"></i> 1,200 sqft</span>
                        </div>
                        <div class="d-flex gap-2">
                            <a href="#" class="btn btn-outline-dark btn-sm flex-fill">View Details</a>
                            <a href="#" class="btn btn-dark btn-sm flex-fill">Contact Agent</a>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        <div class="text-center mt-5">
            <a href="{{route('sell')}}" class="btn btn-lg btn-outline-dark">View All Properties</a>
        </div>
    </div>
</section>
<!-- Rent -->
<section class="py-5">
    <div class="container">
        <h2 class="text-center fw-bold mb-1">Featured Properties</h2>
        <p class="text-center text-secondary mb-5">Discover our handpicked selection of premium properties available for sale and rent</p>
        <div class="row g-4 justify-content-center">

            {{-- Property Card 1 (Rent) --}}
           <div class="col-12 col-sm-6 col-lg-3 d-flex">
                <div class="card property-card shadow-sm border-0 w-100">
                    <div class="position-relative">
                        {{-- Placeholder Image (Use your own image URL) --}}
                        <img src="https://i2.au.reastatic.net/800x600/dbce6c9fb221a7493eeb9da13a1e3c0dbc29c372757dcc325c2070ba7a6bc8f1/image.jpg" class="card-img-top property-img" alt="Executive Apartment" style="height: 200px; object-fit: cover;">
                        <span class="badge bg-primary text-white position-absolute top-0 start-0 m-2">Featured</span>
                        <span class="badge bg-warning text-dark position-absolute top-0 start-0 ms-auto m-2" style="left: 65px!important;">For Rent</span>
                        <button class="btn btn-light btn-sm position-absolute top-0 end-0 m-2 rounded-circle shadow-sm" aria-label="Add to favorites">
                            <i class="bi bi-heart"></i>
                             <>
                        </button>
                    </div>
                    <div class="card-body">
                        <h4 class="card-title h5 fw-bold text-dark mb-1">$3,200 <span class="fw-normal text-secondary small">/month</span></h4>
                        <p class="card-text mb-2 fw-semibold">Executive Apartment with Garden View</p>
                        <p class="text-secondary mb-3"><i class="bi bi-geo-alt-fill me-1"></i> Bukit Timah, District 21</p>
                        <div class="d-flex justify-content-between text-secondary mb-3 small">
                            <span><i class="bi bi-house-door me-1"></i> 3</span>
                            <span><i class="bi bi-rulers me-1"></i> 2</span>
                            <span><i class="bi bi-car me-1"></i> 1</span>
                            <span><i class="bi bi-square-fill me-1"></i> 1,100 sqft</span>
                        </div>
                        <div class="d-flex gap-2">
                            <a href="#" class="btn btn-outline-dark btn-sm flex-fill">View Details</a>
                            <a href="#" class="btn btn-dark btn-sm flex-fill">Contact Agent</a>
                        </div>
                    </div>
                </div>
            </div>

            {{-- Property Card 2 (Rent) --}}
            <div class="col-12 col-sm-6 col-lg-3 d-flex">
                <div class="card property-card shadow-sm border-0 w-100">
                    <div class="position-relative">
                        {{-- Placeholder Image (Use your own image URL) --}}
                        <img src="https://i2.au.reastatic.net/800x600/dbce6c9fb221a7493eeb9da13a1e3c0dbc29c372757dcc325c2070ba7a6bc8f1/image.jpg" alt="Luxury Penthouse" style="height: 200px; object-fit: cover;">
                        <span class="badge bg-primary text-white position-absolute top-0 start-0 m-2">Featured</span>
                        <span class="badge bg-warning text-dark position-absolute top-0 start-0 ms-auto m-2" style="left: 65px!important;">For Rent</span>
                        <button class="btn btn-light btn-sm position-absolute top-0 end-0 m-2 rounded-circle shadow-sm" aria-label="Add to favorites">
                            <i class="bi bi-heart"></i>
                             <>
                        </button>
                    </div>
                    <div class="card-body">
                        <h4 class="card-title h5 fw-bold text-dark mb-1">$8,500 <span class="fw-normal text-secondary small">/month</span></h4>
                        <p class="card-text mb-2 fw-semibold">Luxury Penthouse with Big Private Pool </p>
                        <p class="text-secondary mb-3"><i class="bi bi-geo-alt-fill me-1"></i> Orchard Road, District 9</p>
                        <div class="d-flex justify-content-between text-secondary mb-3 small">
                            <span><i class="bi bi-house-door me-1"></i> 4</span>
                            <span><i class="bi bi-rulers me-1"></i> 3</span>
                            <span><i class="bi bi-car me-1"></i> 2</span>
                            <span><i class="bi bi-square-fill me-1"></i> 2,500 sqft</span>
                        </div>
                        <div class="d-flex gap-2">
                            <a href="#" class="btn btn-outline-dark btn-sm flex-fill">View Details</a>
                            <a href="#" class="btn btn-dark btn-sm flex-fill">Contact Agent</a>
                        </div>
                    </div>
                </div>
            </div>

            {{-- Property Card 3 (Rent - HDB) --}}
           <div class="col-12 col-sm-6 col-lg-3 d-flex">
                <div class="card property-card shadow-sm border-0 w-100">
                    <div class="position-relative">
                        {{-- Placeholder Image (Use your own image URL) --}}
                        <img src="https://i2.au.reastatic.net/800x600/dbce6c9fb221a7493eeb9da13a1e3c0dbc29c372757dcc325c2070ba7a6bc8f1/image.jpg" class="card-img-top property-img" alt="Executive Apartment" style="height: 200px; object-fit: cover;">
                        <span class="badge bg-primary text-white position-absolute top-0 start-0 m-2">Featured</span>
                        <span class="badge bg-warning text-dark position-absolute top-0 start-0 ms-auto m-2" style="left: 65px!important;">For Rent</span>
                        <button class="btn btn-light btn-sm position-absolute top-0 end-0 m-2 rounded-circle shadow-sm" aria-label="Add to favorites">
                            <i class="bi bi-heart"></i>
                             <>
                        </button>
                    </div>
                    <div class="card-body">
                        <h4 class="card-title h5 fw-bold text-dark mb-1">$3,200 <span class="fw-normal text-secondary small">/month</span></h4>
                        <p class="card-text mb-2 fw-semibold">Executive Apartment with Garden View</p>
                        <p class="text-secondary mb-3"><i class="bi bi-geo-alt-fill me-1"></i> Bukit Timah, District 21</p>
                        <div class="d-flex justify-content-between text-secondary mb-3 small">
                            <span><i class="bi bi-house-door me-1"></i> 3</span>
                            <span><i class="bi bi-rulers me-1"></i> 2</span>
                            <span><i class="bi bi-car me-1"></i> 1</span>
                            <span><i class="bi bi-square-fill me-1"></i> 1,100 sqft</span>
                        </div>
                        <div class="d-flex gap-2">
                            <a href="#" class="btn btn-outline-dark btn-sm flex-fill">View Details</a>
                            <a href="#" class="btn btn-dark btn-sm flex-fill">Contact Agent</a>
                        </div>
                    </div>
                </div>
            </div>

            {{-- Property Card 4 (Rent) --}}
            <div class="col-12 col-sm-6 col-lg-3 d-flex">
                <div class="card property-card shadow-sm border-0 w-100">
                    <div class="position-relative">
                        {{-- Placeholder Image (Use your own image URL) --}}
                        <img src="https://i2.au.reastatic.net/800x600/dbce6c9fb221a7493eeb9da13a1e3c0dbc29c372757dcc325c2070ba7a6bc8f1/image.jpg" class="card-img-top property-img" class="card-img-top property-img" alt="Executive Apartment" style="height: 200px; object-fit: cover;">
                        <span class="badge bg-primary text-white position-absolute top-0 start-0 m-2">Featured</span>
                        <span class="badge bg-warning text-dark position-absolute top-0 start-0 ms-auto m-2" style="left: 65px!important;">For Rent</span>
                        <button class="btn btn-light btn-sm position-absolute top-0 end-0 m-2 rounded-circle shadow-sm" aria-label="Add to favorites">
                            <i class="bi bi-heart"></i>
                             <>
                        </button>
                    </div>
                    <div class="card-body">
                        <h4 class="card-title h5 fw-bold text-dark mb-1">$3,200 <span class="fw-normal text-secondary small">/month</span></h4>
                        <p class="card-text mb-2 fw-semibold">Executive Apartment with Garden View</p>
                        <p class="text-secondary mb-3"><i class="bi bi-geo-alt-fill me-1"></i> Bukit Timah, District 21</p>
                        <div class="d-flex justify-content-between text-secondary mb-3 small">
                            <span><i class="bi bi-house-door me-1"></i> 3</span>
                            <span><i class="bi bi-rulers me-1"></i> 2</span>
                            <span><i class="bi bi-car me-1"></i> 1</span>
                            <span><i class="bi bi-square-fill me-1"></i> 1,100 sqft</span>
                        </div>
                        <div class="d-flex gap-2">
                            <a href="#" class="btn btn-outline-dark btn-sm flex-fill">View Details</a>
                            <a href="#" class="btn btn-dark btn-sm flex-fill">Contact Agent</a>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        <div class="text-center mt-5">
            <a href="{{route('rent')}}" class="btn btn-lg btn-outline-dark">View All Properties</a>
        </div>
    </div>
</section>
@endsection
