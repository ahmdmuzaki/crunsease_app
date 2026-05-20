<!DOCTYPE html>
<html>
<head>
    <title>CRUNSEASE Clothing</title>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body class="bg-light">

    @include('layouts.navbar')

    <div class="container py-4">
        @yield('content')
    </div>

    @include('layouts.footer')

    <!-- Bootstrap JS (WAJIB agar dropdown/navbar tidak rusak) -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>