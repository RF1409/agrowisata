<nav class="main-header navbar navbar-expand navbar-white navbar-light">
  <!-- Left navbar links -->
  <ul class="navbar-nav">
    <li class="nav-item">
      <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
    </li>
    <li class="nav-item d-none d-sm-inline-block">
      <a href="/dashboard/contact" class="nav-link {{ Request::is('dashboard/contact*') ? 'active' : '' }}"><i class="fas fa-users mr-2"></i> Contact</a>
    </li>
  </ul>


  
  <!-- Right navbar links -->
  <ul class="navbar-nav ml-auto">
   
    <li class="nav-item">
      <a class="nav-link" data-widget="fullscreen" href="#" role="button">
        <i class="fas fa-expand-arrows-alt"></i>
      </a>
    </li>
    
  </ul>

          <form action="/logout" method="post">
              @csrf
              <button type="submit" class="nav-link bg-dark border-0">
                  <i class="bi bi-box-arrow-in-right"></i> 
                  Logout 
              </button>
          </form>

</nav>
<!-- /.navbar -->