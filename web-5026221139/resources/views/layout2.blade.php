<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}"> {{--nyoba-nyoba security aja--}}
    <title>Dimas Fajar Ramadhan 5026221139</title>
    <link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">

    <!--font awesom-->

    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" rel="stylesheet">


    <!-- Bootstrap 5 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">


</head>
<body>
    <!-- Header -->
    <header class="bg-light shadow-sm">
        <div class="container d-flex justify-content-between align-items-center py-2">
            <!-- Logo or Brand -->
            <a class="navbar-brand fw-bold" href="/">Dimas Fajar Ramadhan 5026221139</a>
            <!-- Right Side Text -->
            <span class="text-muted">malasngoding.com</span>
        </div>
    </header>

    <!-- Main Content -->
    <main class="container py-4">
        @yield('content')
    </main>

    <!-- Footer -->
    <footer class="bg-dark text-white text-center py-3">
        <p class="mb-0">&copy; {{ date('Y') }} My Application. All rights reserved.</p>
    </footer>

    <!-- Bootstrap 5 JS Bundle -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Custom JS -->
    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>
