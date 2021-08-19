<nav class="sidebar sidebar-offcanvas" id="sidebar">
    <div class="sidebar-brand-wrapper d-none d-lg-flex align-items-center justify-content-center fixed-top">
      <a class="sidebar-brand brand-logo" href="index.html"><img src="{{ asset ('admin/assets/images/logo.svg')}}" alt="logo" /></a>
      <a class="sidebar-brand brand-logo-mini" href="index.html"><img src="{{ asset ('admin/assets/images/logo-mini.svg')}}" alt="logo" /></a>
    </div>
    <ul class="nav">

      <li class="nav-item nav-category">
        <span class="nav-link">Navigation</span>
      </li>
      <li class="nav-item menu-items">
        <a class="nav-link" href="{{url('/users')}}">
          <span class="menu-icon">
            <i class="mdi mdi-speedometer"></i>
          </span>
          <span class="menu-title">Users</span>
        </a>
      </li>


      <li class="nav-item menu-items">
        <a class="nav-link" href="{{ url('/foods') }}">
          <span class="menu-icon">
            <i class="mdi mdi-playlist-play"></i>
          </span>
          <span class="menu-title">Foods</span>
        </a>
      </li>
      <li class="nav-item menu-items">
        <a class="nav-link" href="{{ url('/viewChef') }}">
          <span class="menu-icon">
            <i class="mdi mdi-table-large"></i>
          </span>
          <span class="menu-title">Chefs</span>
        </a>
      </li>
      <li class="nav-item menu-items">
        <a class="nav-link" href="{{ url('/viewReservation') }}">
          <span class="menu-icon">
            <i class="mdi mdi-chart-bar"></i>
          </span>
          <span class="menu-title">Reservetions</span>
        </a>
      </li>



    </ul>
  </nav>
