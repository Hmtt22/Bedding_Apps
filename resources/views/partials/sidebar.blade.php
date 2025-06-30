<!-- [ Sidebar Menu ] start -->
<nav class="pc-sidebar">
    <div class="navbar-wrapper">
      <div class="m-header">
        <a href="/" class="pc-link">
          <!-- ========   Change your logo from here   ============ -->
          <img src="{{ asset('assets/images/logo-dark.svg')}}" class="img-fluid logo-lg" alt="logo">
        </a>
      </div>
      <div class="navbar-content">
        <ul class="pc-navbar">
          <li class="pc-item">
            <a href="/" class="pc-link">
              <span class="pc-micon"><i class="ti ti-apps"></i></span>
              <span class="pc-mtext">Dashboard</span>
            </a>
          </li>
          <hr>

          {{-- @if(auth()->check() && (auth()->user()->role === 'super_admin' || auth()->user()->role === 'user')) --}}
          {{-- @if(auth()->user()->role === 'super_admin' || auth()->user()->role === 'user') --}}
          <!-- Menu untuk user dan super admin -->
          {{-- Menu khusus untuk USER --}}
                {{-- @if(auth()->user()->role === 'user') --}}
          <li class="pc-item pc-caption">
            <label>Activity</label>
            <i class="ti ti-news"></i>
          </li>
          <li class="pc-item">
            <a href="/setting_beds" class="pc-link">
              <span class="pc-micon"><i class="fas fa-cogs"></i></span>
              <span class="pc-mtext">Setting Bed</span>
            </a>
          </li>
          {{-- @endif --}}

          {{-- @if(Auth::user()->role === 'admin' || Auth::user()->role === 'super_admin') --}}
          <!-- Menu untuk admin dan super admin -->
          <li class="pc-item pc-caption">
            <label>Components</label>
            <i class="ti ti-dashboard"></i>
          </li>
          <li class="pc-item">
            <a href="/buildings" class="pc-link">
              <span class="pc-micon"><i class="ti ti-building-skyscraper"></i></span>
              <span class="pc-mtext">Building</span>
            </a>
          </li>
          <li class="pc-item">
            <a href="/rooms" class="pc-link">
                <span class="pc-micon"><i class="ti ti-color-swatch"></i></span>
              <span class="pc-mtext">Room</span>
            </a>
          </li>
          <li class="pc-item">
            <a href="/beds" class="pc-link">
              <span class="pc-micon"><i class="ti ti-bed"></i></span>
              <span class="pc-mtext">Bed</span>
            </a>
          </li>
           <li class="pc-item">
            <a href="/categories" class="pc-link">
              <span class="pc-micon"><i class="ti ti-list"></i></span>
              <span class="pc-mtext">Category</span>
            </a>
          </li>
          <hr>

          <li class="pc-item pc-caption">
            <label>User Management</label>
            <i class="ti ti-news"></i>
          </li>
          <li class="pc-item">
            <a href="/users" class="pc-link">
              <span class="pc-micon"><i class="ti ti-users"></i></span>
              <span class="pc-mtext">Account </span>
            </a>
          </li>

          <li class="pc-item">
            <a href="/roles" class="pc-link">
              <span class="pc-micon"><i class="ti ti-users"></i></span>
              <span class="pc-mtext">Role </span>
            </a>
          </li>

          <li class="pc-item">
            <a href="/userlogins" class="pc-link">
              <span class="pc-micon"><i class="ti ti-users"></i></span>
              <span class="pc-mtext">User Login </span>
            </a>
          </li>

          {{-- @endif --}}


        </ul>

      </div>
    </div>
</nav>
<!-- [ Sidebar Menu ] end -->
