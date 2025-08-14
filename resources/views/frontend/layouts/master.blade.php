<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Cakes by Hiru - Premium Bakery')</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- Bootstrap 5 CSS -->
    <link href="{{ asset('frontend/css/bootstrap.min.css') }}" rel="stylesheet">

    <!-- Bootstrap Icons -->
    <link href="{{ asset('frontend/css/bootstrap-icons.css') }}" rel="stylesheet">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Pacifico&family=Quicksand&display=swap" rel="stylesheet">

    <!-- Custom Styles -->
    <link href="{{ asset('frontend/css/main.css') }}" rel="stylesheet">

    <!-- Bootstrap Icons CDN -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css">


    <style>
        body {
            font-family: 'Quicksand', sans-serif;
            background-color: #f6e5f3ff;
        }
    </style>

    @stack('styles')
</head>
<body>

    <!-- Navigation Bar -->
    @include('frontend.layouts.navbar')

    <!-- Page Content -->
    <main class="py-1">
        @yield('content')
    </main>

    <!-- Footer -->
    @include('frontend.layouts.footer')

    <!-- Bootstrap Bundle JS -->
    <script src="{{ asset('frontend/js/bootstrap.bundle.min.js') }}"></script>

    @stack('scripts')
</body>
</html>
