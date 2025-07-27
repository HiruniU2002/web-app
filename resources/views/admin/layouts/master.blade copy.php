<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Dashboard - Cakes by Hiru</title>
  <link href="{{asset('admin/css/bootstrap.min.css')}}" rel="stylesheet" />
  <link rel="stylesheet" href="{{asset('frontend/css/bootstrap-icons.css')}}">
  <link rel="stylesheet" href="{{asset('frontend/css/main.css')}}">
</head>
<body>

  <!-- Top Navbar -->
 @include('admin.layouts.navbar')

  <div class="d-flex">
    <!-- Sidebar -->
 @include('admin.layouts.sidebar')

    <!-- Main Content -->
     <div class="container-fluid p-4">
  @yield('content')
  </div>

  <!-- Bootstrap JS -->
  <script src="{{asset('admin/js/bootstrap.bundle.min.js')}}"></script>
</body>
</html>
