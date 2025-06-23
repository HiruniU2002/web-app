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
      <h2 class="mb-4">Welcome, Admin 👋</h2>

      <!-- Dashboard Cards -->
      <div class="row g-4">
        <div class="col-md-3">
          <div class="card text-bg-primary shadow-sm">
            <div class="card-body">
              <h5 class="card-title">Revenue</h5>
              <p class="fs-4">$5,300</p>
              <i class="ri-money-dollar-circle-line fs-2"></i>
            </div>
          </div>
        </div>
        <div class="col-md-3">
          <div class="card text-bg-success shadow-sm">
            <div class="card-body">
              <h5 class="card-title">Orders</h5>
              <p class="fs-4">128</p>
              <i class="ri-shopping-cart-2-line fs-2"></i>
            </div>
          </div>
        </div>
        <div class="col-md-3">
          <div class="card text-bg-warning shadow-sm">
            <div class="card-body">
              <h5 class="card-title">Customers</h5>
              <p class="fs-4">89</p>
              <i class="ri-user-smile-line fs-2"></i>
            </div>
          </div>
        </div>
        <div class="col-md-3">
          <div class="card text-bg-danger shadow-sm">
            <div class="card-body">
              <h5 class="card-title">Cakes in Stock</h5>
              <p class="fs-4">45</p>
              <i class="ri-cake-line fs-2"></i>
            </div>
          </div>
        </div>
      </div>

      <!-- Orders Table -->
      <div class="mt-5">
        <h4>Recent Orders</h4>
        <div class="table-responsive">
          <table class="table table-bordered table-hover align-middle">
            <thead class="table-dark">
              <tr>
                <th>Order ID</th>
                <th>Customer</th>
                <th>Item</th>
                <th>Total</th>
                <th>Status</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>#101</td>
                <td>Dinithi</td>
                <td>Chocolate Cake</td>
                <td>$45</td>
                <td><span class="badge bg-success">Delivered</span></td>
              </tr>
              <tr>
                <td>#102</td>
                <td>Kavindu</td>
                <td>Birthday Cake</td>
                <td>$60</td>
                <td><span class="badge bg-warning text-dark">Pending</span></td>
              </tr>
              <tr>
                <td>#103</td>
                <td>Nadeesha</td>
                <td>Wedding Cake</td>
                <td>$300</td>
                <td><span class="badge bg-danger">Cancelled</span></td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>

  <!-- Bootstrap JS -->
  <script src="{{asset('admin/js/bootstrap.bundle.min.js')}}"></script>
</body>
</html>
