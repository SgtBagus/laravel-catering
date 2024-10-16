<a href="index3.html" class="brand-link">
    <img src="{{ asset('/') }}dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
    <span class="brand-text font-weight-light">AdminLTE 3</span>
</a>

<div class="sidebar">
    <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="info">
            <a href="#" class="d-block">{{ Auth::user()->name }}</a>
        </div>
    </div>

    <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
            <li class="nav-item">
                <a href={{ url('/admin') }} class="nav-link">
                    <i class="nav-icon fas fa-tachometer-alt"></i>
                    <p>Dashboard</p>
                </a>
            </li>
            <li class="nav-item">
                <a href={{ url('/orders') }} class="nav-link">
                    <i class="nav-icon fa fa-list-alt"></i>
                    <p>Order List</p>
                </a>
            </li>
            <li class="nav-item">
                <a href={{ url('/menus') }} class="nav-link">
                    <i class="nav-icon fa fa-utensils"></i>
                    <p>Menu List</p>
                </a>
            </li>
            <li class="nav-item">
                <a href="#" class="nav-link">
                  <i class="nav-icon fas fa-database"></i>
                  <p>
                    Master
                    <i class="fas fa-angle-left right"></i>
                  </p>
                </a>
                <ul class="nav nav-treeview">
                  <li class="nav-item">
                    <a href={{ url('/admin/users') }} class="nav-link">
                      <i class="fa fa-users nav-icon"></i>
                      <p>User List</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href={{ url('/admin/tags') }} class="nav-link">
                      <i class="fa fa-tag nav-icon"></i>
                      <p>Tag</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href={{ url('/admin/locations') }} class="nav-link">
                      <i class="fa fa-map nav-icon"></i>
                      <p>Location</p>
                    </a>
                  </li>
                </ul>
              </li>
        </ul>
    </nav>
</div>
