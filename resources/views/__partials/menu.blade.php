<nav class="sidebar sidebar-offcanvas" id="sidebar">
  <ul class="nav">
    <li class="nav-item nav-profile">
      <div class="nav-link">
        <div class="user-wrapper">
          <div class="profile-image">
            <img src="{{asset('assets/images/faces/user.png')}}" alt="profile image"> </div>
          <div class="text-wrapper">
            <p class="profile-name">{{\Illuminate\Support\Facades\Auth::user()->name}}  </p>
            <div>
              <small class="designation text-muted">Admin</small>
              <span class="status-indicator online"></span>
            </div>
          </div>
        </div>
      </div>
    </li>
    <li class="nav-item">
      <a class="nav-link" data-toggle="collapse" href="#dashboard-dropdown" aria-expanded="false" aria-controls="dashboard-dropdown">
        <i class="menu-icon mdi mdi-television"></i>
        <span class="menu-title">Dashboard</span>
        <i class="menu-arrow"></i>
      </a>
      <div class="collapse" id="dashboard-dropdown">
        <ul class="nav flex-column sub-menu">
          <li class="nav-item">
            <a class="nav-link" href="#">Dashboard 1</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Dashboard 2</a>
          </li>
        </ul>
      </div>
    </li>
  </ul>
</nav>
