<div class="navbar-bg"></div>
  <nav class="navbar navbar-expand-lg main-navbar">
    <form class="form-inline mr-auto"></form>
    <ul class="navbar-nav navbar-right">
      <li class="dropdown"><a href="/admin" data-toggle="dropdown" class="nav-link dropdown-toggle nav-link-lg nav-link-user">
        <img alt="image" src="{{ asset('assets/img/avatar/avatar-1.png') }}" class="rounded-circle mr-1">
          <div class="d-sm-none d-lg-inline-block">Hi, </div></a>
            <div class="dropdown-menu dropdown-menu-right">
                <a href="{{ URL::to('') }}" class="dropdown-item has-icon text-danger">
                  <i class="fas fa-sign-out-alt"></i><b>LOG OUT</b>
                </a>
            </div>
          </div>
      </li>
  </nav>
