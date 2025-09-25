<footer class="bg-dark text-white mt-auto">
    <div class="container py-4">
        <div class="row g-3 align-items-center">
            <div class="col-md-6">
                <span class="fw-semibold">INVA Property</span>
                <span class="text-white-50 ms-2">© {{ date('Y') }}. All rights reserved.</span>
            </div>
            <div class="col-md-6">
                <ul class="nav justify-content-md-end gap-3">
                    <li class="nav-item"><a href="{{ route('insights') }}" class="nav-link px-0 text-white-50">Insights</a></li>
                    <li class="nav-item"><a href="{{ route('agents') }}" class="nav-link px-0 text-white-50">Agents</a></li>
                    <li class="nav-item"><a href="{{ route('list-property') }}" class="nav-link px-0 text-white-50">List Property</a></li>
                </ul>
            </div>
        </div>
    </div>
</footer>

