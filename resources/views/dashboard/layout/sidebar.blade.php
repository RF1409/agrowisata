
<aside class="main-sidebar sidebar-dark-primary elevation-4">
  <!-- Brand Logo -->
  <a href="/" class="brand-link">
    <img src="/style/dist/img/logo.png"  class="brand-image img-circle elevation-3" style="opacity: .8">
    <span class="brand-text font-weight-light ">Agrowisata</span>
  </a>

  <!-- Sidebar -->
  <div class="sidebar">
    <!-- Sidebar user panel (optional) -->
    <div class="user-panel mt-3 pb-3 mb-3 d-flex">
      <div class="image">
        <img src="/style/dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image" style="width: 40px">
      </div>
      <div class="info">
        <a href="#" class="d-block">{{ auth()->user()->name }}</a>
      </div>
    </div>

    <!-- Sidebar Menu -->
    <nav class="mt-2">
      <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
        <!-- Add icons to the links using the .nav-icon class
             with font-awesome or any other icon font library -->
        <li class="nav-item menu-open">
          <a href="#" class="nav-link">
            <i class="nav-icon fas fa-tachometer-alt"></i>
            <p>
              Dashboard
              <i class="right fas fa-angle-left"></i>
            </p>
          </a>
          <ul class="nav nav-treeview">
          <li class="nav-item">
              <a href="/dashboard" class="nav-link {{ Request::is('dashboard') ? 'active' : '' }}">
              <i class="fas fa-home nav-icon"></i>
                  <p>Dashboard</p>
              </a>
          </li>
          <li class="nav-item">
              <a href="/dashboard/alltanis" class="nav-link {{ Request::is('dashboard/alltanis*') ? 'active' : '' }}">
                <i class="nav-icon fas fa-table"></i>
                  <p>Data All Hasil Panen</p>
              </a>
          </li>
            <li class="nav-item">
              <a href="/dashboard/tanis" class="nav-link {{ Request::is('dashboard/tanis*') ? 'active' : '' }}">
                <i class="nav-icon fas fa-table"></i>
                <p>Data Hasil Panen</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="/dashboard/transaksis" class="nav-link {{ Request::is('dashboard/transaksis*') ? 'active' : '' }}">
                <i class="nav-icon fas fa-table"></i>
                <p>Data Transaksi</p>
              </a>
            </li>
          </ul>
        </li>

        @can('admin')
        <li class="nav-item menu-open">
          <a href="#" class="nav-link">
          <i class="nav-icon fas fa-th"></i>
            <p>
              Administrator
              <i class="fas fa-angle-left right"></i>
            </p>
          </a>
          <ul class="nav nav-treeview">
            
            <li class="nav-item">
              <a href="/dashboard/alltransaksis" class="nav-link {{ Request::is('dashboard/alltransaksis*') ? 'active' : '' }}">
                <i class="far fa-circle nav-icon"></i>
                <p>Data All Transaksi</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="/dashboard/users" class="nav-link {{ Request::is('dashboard/users*') ? 'active' : '' }}">
                <i class="far fa-circle nav-icon"></i>
                <p>Data All User</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="/dashboard/posts" class="nav-link {{ Request::is('dashboard/posts*') ? 'active' : '' }}">
                <i class="far fa-circle nav-icon"></i>
                <p>My Posts</p>
              </a>
            </li>
            
          </ul>
        </li>
        @endcan

      </ul>
    </nav>
    <!-- /.sidebar-menu -->
    
  </div>
  <!-- /.sidebar -->

  
</aside>

