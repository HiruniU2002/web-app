 <nav class="navbar navbar-expand-lg navbar-dark bg-dark sticky-top">
    <div class="container-fluid">
      <a class="navbar-brand d-flex align-items-center" href="#">
       <img src="{{asset('admin/images/Cake-Logo.png')}}" alt="Logo" width="50" height="50" class="rounded-circle">
        <span class="fw-bold">CAKES BY HIRU</span>
      </a>

      <!-- Search Bar
      <form class="d-flex mx-auto w-50" role="search">
        <input class="form-control me-2" type="search" placeholder="Search orders, cakes..." aria-label="Search">
        <button class="btn btn-outline-light" type="submit">Search</button>
      </form> -->

      <!-- Right Controls -->
      <div class="d-flex">
        <form action="{{ route('logout') }}" method="POST" class="d-inline">
           @csrf
           <button type="submit" class="btn btn-outline-light">Logout</button>
        </form>

      </div>
    </div>
  </nav>