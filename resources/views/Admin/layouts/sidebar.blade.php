<nav id="sidebarMenu" class="sidebar d-lg-block bg-gray-800 text-white collapse" data-simplebar>
  <div class="sidebar-inner px-2 pt-3">
    <div class="user-card d-flex d-md-none align-items-center justify-content-between justify-content-md-center pb-4">
      <div class="collapse-close d-md-none">
        <a href="#sidebarMenu" data-bs-toggle="collapse" data-bs-target="#sidebarMenu" aria-controls="sidebarMenu"
          aria-expanded="true" aria-label="Toggle navigation">
          <svg class="icon icon-xs" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
            <path fill-rule="evenodd"
              d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
              clip-rule="evenodd"></path>
          </svg>
        </a>
      </div>
    </div>
    <ul class="nav flex-column pt-3 pt-md-0">
      <li class="nav-item">
        <a href="{{ route('dashboard.index') }}" class="nav-link d-flex align-items-center">
          <span class="sidebar-icon me-3">
            <img src="{{ url('assets/home/img/agen_x.png') }}" height="20" width="20" alt="Volt Logo">
          </span>
          <span class="mt-1 ms-1 sidebar-text">
            Agent-X
          </span>
        </a>
      </li>
      <li class="nav-item {{ request()->is('dashboard') ? 'active' : '' }}">
        <a href="{{ route('dashboard.index') }}" class="nav-link">
            <span class="sidebar-icon">
            <i class="fas fa-tachometer-alt fa-fw me-2"></i>
            </span>
            <span class="sidebar-text">Dashboard</span>
        </a>
        </li>
      <li class="nav-item {{ request()->routeIs('order.index') ? 'active' : '' }}">
        <a href="{{ route('order.index') }}" class="nav-link">
          <span class="sidebar-icon">
          <i class="fas fa-clipboard-list fa-fw me-2"></i>
          <span class="sidebar-text">Pesanan</span>
        </a>
      </li>
      <li class="nav-item {{ request()->routeIs('checkin.index') ? 'active' : '' }}">
        <a href="{{ route('checkin.index') }}" class="nav-link">
          <span class="sidebar-icon">
          <i class="fas fa-check-circle fa-fw me-2"></i>
          <span class="sidebar-text">Check-in</span>
        </a>
      </li>
      <li class="nav-item {{ request()->routeIs('report.index') ? 'active' : '' }}">
        <a href="{{ route('report.index') }}" class="nav-link">
          <span class="sidebar-icon">
          <i class="fas fa-file-alt fa-fw me-2"></i>
          <span class="sidebar-text">Laporan</span>
        </a>
      </li>
    </ul>
  </div>
</nav>