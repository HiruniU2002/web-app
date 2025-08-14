<!-- Sidebar -->
<div class="d-flex flex-column p-3 text-white min-vh-100" style="width: 250px; background: #6B4A3B;">

  <hr style="border-color: #D8B5A5;">
  <ul class="nav nav-pills flex-column mb-auto">
    <li class="nav-item">
      <a href="#" class="nav-link text-white rounded-3 px-3 py-2" style="background-color: #A67B5B;">
        <i class="bi bi-speedometer2 me-2"></i> Dashboard
      </a>
    </li>
        <li class="nav-item">
      <a href="/profileIndex" class="nav-link text-white rounded-3 px-3 py-2 hover-bg-pink">
        <i class="bi bi-basket2-fill me-2"></i> Profile
      </a>
    </li>
    <li>
      <a href="/cakes" class="nav-link text-white rounded-3 px-3 py-2 hover-bg-pink">
        <i class="bi bi-basket2-fill me-2"></i> Manage Cakes
      </a>
    </li>
    <li>
      <a href="/SliderIndex" class="nav-link text-white rounded-3 px-3 py-2 hover-bg-pink">
        <i class="bi bi-images me-2"></i> Slider Setting
      </a>
    </li>
    <li>
      <a href="/homeIndex" class="nav-link text-white rounded-3 px-3 py-2 hover-bg-pink">
        <i class="bi bi-house-fill me-2"></i> HomePage Setting
      </a>
    </li>
    <li>
      <a href="/contact/admin" class="nav-link text-white rounded-3 px-3 py-2 hover-bg-pink">
        <i class="bi bi-card-checklist me-2"></i> Messages
      </a>
    </li>
    <!-- <li>
      <a href="#" class="nav-link text-white rounded-3 px-3 py-2 hover-bg-pink">
        <i class="bi bi-people-fill me-2"></i> Customers
      </a>
    </li> -->
    <li class="nav-item dropdown">
      <a href="#" class="nav-link dropdown-toggle text-white rounded-3 px-3 py-2" id="usersDropdown" data-bs-toggle="dropdown" aria-expanded="false">
        <i class="bi bi-person-gear me-2"></i> Users Manager
      </a>
      <ul class="dropdown-menu bg-light rounded-3" aria-labelledby="usersDropdown">
        <li><a class="dropdown-item" href="/userIndex">Users</a></li>
        <li><a class="dropdown-item" href="/roleIndex">Roles</a></li>
        <li><a class="dropdown-item" href="/permissionIndex">Permissions</a></li>
      </ul>
    </li>
    <li>
      <form method="POST" action="{{ route('logout') }}">
        @csrf
        <button type="submit" class="btn btn-link text-white text-decoration-none px-3 py-2 w-100 text-start">
          <i class="bi bi-box-arrow-right me-2"></i> Logout
        </button>
      </form>
    </li>
  </ul>
</div>


