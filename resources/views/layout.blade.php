<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="{{ asset('css/bootstrap/bootstrap.css') }}" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="{{ asset('css/custom.css') }}" rel="stylesheet">

    <title>Portfolio</title>
</head>

<body>
    <div class="container-fluid">
        <div class="row">
            @include('sidebar')
            @yield('content')
        </div>
    </div>

    <!-- Bootstrap Bundle with Popper -->
    <script src="{{ asset('js/bootstrap/bootstrap.bundle.js') }}"></script>
</body>

</html>