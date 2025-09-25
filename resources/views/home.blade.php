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
                                        <input type="text" class="form-control form-control-ml" placeholder="Location (e.g., Singapore)">
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
                                        <button type="button" class="btn btn-ml btn-dark w-100">Search</button>
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

<section>
    <div class="container py-5">
        <h2 class="h4 fw-semibold mb-4">Featured categories</h2>
        <div class="row g-3">
            <div class="col-12 col-md-4">
                <a href="{{ route('buy') }}" class="text-decoration-none">
                    <div class="p-4 border rounded-3 h-100">
                        <h3 class="h5 mb-1">Homes for Sale</h3>
                        <p class="text-secondary mb-0">Browse listings available to buy.</p>
                    </div>
                </a>
            </div>
            <div class="col-12 col-md-4">
                <a href="{{ route('rent') }}" class="text-decoration-none">
                    <div class="p-4 border rounded-3 h-100">
                        <h3 class="h5 mb-1">Homes for Rent</h3>
                        <p class="text-secondary mb-0">Find rentals that fit your budget.</p>
                    </div>
                </a>
            </div>
            <div class="col-12 col-md-4">
                <a href="{{ route('agents') }}" class="text-decoration-none">
                    <div class="p-4 border rounded-3 h-100">
                        <h3 class="h5 mb-1">Find an Agent</h3>
                        <p class="text-secondary mb-0">Connect with experienced agents.</p>
                    </div>
                </a>
            </div>
        </div>
    </div>
</section>
@endsection
