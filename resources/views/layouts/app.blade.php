<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>INVA PROPERTY</title>
    <link href="{{ asset('build/assets/css/bootstrap.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('css/style.css') }}" rel="stylesheet" />


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
