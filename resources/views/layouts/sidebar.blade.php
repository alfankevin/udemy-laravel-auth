<aside id="sidebar-wrapper">
    <div class="sidebar-brand">
        <a href="{{ route('dashboard') }}">Stisla</a>
    </div>
    <div class="sidebar-brand sidebar-brand-sm">
        <a href="{{ route('dashboard') }}">St</a>
    </div>
    <ul class="sidebar-menu">
      @section('sidebar')
      <li class="menu-header">Dashboard</li>
      <li class="nav-item dropdown">
          <a href="#" class="nav-link has-dropdown"><i class="fas fa-chart-pie"></i><span>Dashboard</span></a>
          <ul class="dropdown-menu">
              <li><a class="nav-link" href="{{ route('dashboard') }}">General Dashboard</a></li>
              <li><a class="nav-link" href="{{ route('dashboard') }}">Ecommerce Dashboard</a></li>
          </ul>
      </li>
      @can('index-user')
        <li class="nav-item dropdown">
            <a href="{{ route('user-management.index') }}" class="nav-link"><i class="fas fa-users"></i><span>User List</span></a>
        </li>
      @endcan
      <ul class="sidebar-menu">
        <li class="menu-header">Starter</li>
        <li class="nav-item dropdown">
            <a href="#" class="nav-link has-dropdown" data-toggle="dropdown"><i class="fas fa-columns"></i>
                <span>Layout</span></a>
            <ul class="dropdown-menu">
                <li><a class="nav-link" href="layout-default.html">Default Layout</a></li>
                <li><a class="nav-link" href="layout-transparent.html">Transparent Sidebar</a></li>
                <li><a class="nav-link" href="layout-top-navigation.html">Top Navigation</a></li>
            </ul>
        </li>
      </ul>
      @show
    </ul>

    <div class="mt-4 mb-4 p-3 hide-sidebar-mini">
        <a href="https://getstisla.com/docs" class="btn btn-primary btn-lg btn-block btn-icon-split">
            <i class="fas fa-rocket"></i> Documentation
        </a>
    </div>
</aside>
