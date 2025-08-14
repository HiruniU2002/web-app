<nav class="navbar navbar-expand-lg navbar-dark" style="background-color: #A67B5B;">
  <div class="container-fluid">
    <!-- Brand Logo & Name -->
    <a class="navbar-brand d-flex align-items-center" href="/">
      <img src="{{asset('admin/images/Cake-Logo.png')}}" 
           alt="CAKES BY HIRU Logo" 
           width="50" 
           height="50" 
           class="rounded-circle me-2 shadow-sm">
      <span class="fw-bold fs-5">CAKES BY HIRU</span>
    </a>

    <!-- Mobile Toggle Button -->
    <button class="navbar-toggler" 
            type="button" 
            data-bs-toggle="collapse" 
            data-bs-target="#navbarContent"
            aria-controls="navbarContent"
            aria-expanded="false"
            aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <!-- Navbar Content -->
    <div class="collapse navbar-collapse" id="navbarContent">
     

      <!-- Right-aligned Navigation Items -->
      <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
        <!-- Notifications -->
     

        <!-- User Profile -->
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle d-flex align-items-center" 
             href="#" 
             role="button" 
             data-bs-toggle="dropdown">
            
            <span class="d-none d-lg-inline">Admin</span>
          </a>
           <ul class="dropdown-menu dropdown-menu-end">
                <li>
                    <a class="dropdown-item" href="/dashboard">
                        <i class="bi bi-person me-2"></i> Profile
                    </a>
                </li>
                <li>
                    <a class="dropdown-item" href="/">
                        <i class="bi bi-gear me-2"></i> Settings
                    </a>
                </li>
                <li><hr class="dropdown-divider"></li>
                <li>
                    <form method="POST" action="{{ route('logout') }}">
                        @csrf
                        <button type="submit" class="dropdown-item bg-danger text-white">
                            <i class="bi bi-box-arrow-right me-2"></i> Logout
                        </button>
                    </form>
                </li>
            </ul>
        </li>
      </ul>
    </div>
  </div>
</nav>

<style>
  /* Custom styling for the navbar */
  .navbar {
    box-shadow: 0 2px 10px rgba(0,0,0,0.1);
  }
  
  /* Placeholder text color for search */
  .form-control::placeholder {
    color: rgba(255,255,255,0.7);
  }
  
  /* Active nav items */
  .nav-link.active {
    font-weight: 600;
  }
</style>