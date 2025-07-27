<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cakes by Hiru - Premium Bakery</title>
    <link href="{{asset('frontend/css/bootstrap.min.css')}}" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('frontend/css/bootstrap-icons.css')}}">
    <link rel="stylesheet" href="{{asset('frontend/css/main.css')}}">
</head>
<body>
    <!-- Navigation -->
     @include('frontend.layouts.navbar')


    <div>
        @yield('content')
    </div>


    <!-- Footer -->
      @include('frontend.layouts.footer')
  

    <!-- Bootstrap JS -->
    <script src="{{asset('frontend/js/bootstrap.bundle.min.js')}}"></script>
</body>
</html>