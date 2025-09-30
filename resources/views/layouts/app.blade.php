<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>INVA PROPERTY</title>
    <!-- <link href="{{ asset('build/assets/css/bootstrap.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('css/style.css') }}" rel="stylesheet" /> -->

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>

</head>
<body class="bg-test">
    <header>
        @include('layouts.header')

    </header>
    <div>
        <div>
            <div>
                {{-- <h1 class="h1">hello</h1> --}}
                @include('layouts.sidebar')
            </div>
            <div>
                @yield('content')
            </div>
        </div>
    </div>

    <div>
        @include('layouts.footer')
    </div>

</body>
<script src="{{ asset('build/assets/js/bootstrap.bundle.min.js') }}"></script>
</html>
