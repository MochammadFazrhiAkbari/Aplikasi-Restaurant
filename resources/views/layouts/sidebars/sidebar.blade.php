<aside class="main-sidebar sidebar-dark-primary elevation-4" style="background-color:  rgb(95, 61, 36);">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
        <img src="{{ asset('admlte/img/logo.png')}}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
        style="opacity: .8">
    <span class="brand-text font-weight-light">NGOPIKEUN</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
                <img src="{{ asset('admlte/img/logo admin.png')}}" class="img-circle elevation-2" alt="User Image">
            </div>
            <div class="info">
                <a href="https://www.instagram.com/mhmmd_fazrhi/?hl=en" class="d-block">{{ Auth::user()->level }} {{ Auth::user()->name }}</a>
            </div>
        </div>

        <!-- SidebarSearch Form -->
        <div class="form-inline">
            <div class="input-group" data-widget="sidebar-search">
                <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
                <div class="input-group-append">
                    <button class="btn btn-sidebar">
                        <i class="fas fa-search fa-fw"></i>
                    </button>
                </div>
            </div>
        </div>

        <!-- Sidebar Menu -->
        <nav class="mt-2">
            @if (Auth::user()->level == 'admin')
                <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                    data-accordion="false">
                    <!-- Add icons to the links using the .nav-icon class
       with font-awesome or any other icon font library -->
                    <li class="nav-item">
                        <a href="{{ route('home') }}" class="nav-link ">
                            <i class="nav-icon fas fa-globe"></i>
                            <p>
                                Dashboard
                            </p>
                        </a>
                    </li>
                    <li class="nav-item has-treeview">
                        <a href="{{ route('User.index') }}" class="nav-link">
                            <i class="nav-icon fas fa-user-plus"></i>
                            <p>Add Users</p>
                        </a>
                    </li>
                    <li class="nav-item has-treeview">
                        <a href="{{ route('activity.index') }}" class="nav-link">
                            <i class="nav-icon fas fa-users"></i>
                            <p>Log Activity</p>
                        </a>
                    </li>
                  <!--  <li class="nav-item has-treeview">
                        <a href="#" class="nav-link">
                            <i class="nav-icon fas fa-wrench"></i>
                            <p>Setting</p>
                        </a>
                    </li>
                -->
                    <li class="nav-item">
                        <a href="#" class="nav-link" onclick="document.getElementById('logout-form').submit()">
                            <i class="nav-icon fas fa-sign-out-alt"></i>
                            <p>Logout</p>
                            <form action="{{ route('logout') }}" method="POST" id="logout-form">
                                @csrf
                            </form>
                        </a>
                    </li>
                </ul>
            @elseif (Auth::user()->level == 'manager')
                <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                    data-accordion="false">
                    <li class="nav-item">
                        <a href="{{ route('home') }}" class="nav-link ">
                            <i class="nav-icon fas fa-globe"></i>
                            <p>
                                Dashboard
                            </p>
                        </a>
                    </li>
                    <li class="nav-item has-treeview">
                        <a href="{{ route('product.index') }}" class="nav-link">
                            <i class="nav-icon fas fa-bars"></i>
                            <p>Products</p>
                        </a>
                    </li>

                        <li class="nav-item has-treeview">
                            <a href="{{ route('catatantransaksi.index') }}" class="nav-link">
                                <i class="nav-icon fas fa-book-open"></i>
                                <p>Report Transaction</p>
                            </a>
                        </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link" onclick="document.getElementById('logout-form').submit()">
                            <i class="nav-icon fas fa-sign-out-alt"></i>
                            <p>Logout</p>
                            <form action="{{ route('logout') }}" method="POST" id="logout-form">
                                @csrf
                            </form>
                        </a>
                    </li>
                </ul>
            @else
                <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                    data-accordion="false">
                    <li class="nav-item">
                        <a href="{{ route('daftarharga.index') }}" class="nav-link ">
                            <i class="nav-icon fas fa-globe"></i>
                            <p>
                                Dashboard Kasir
                            </p>
                        </a>
                    </li>
                    <li class="nav-item has-treeview">
                        <a href="{{ route('cart.index') }}" class="nav-link">
                            <i class="nav-icon fas fa-cart-arrow-down"></i>
                            <p>Cart</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link" onclick="document.getElementById('logout-form').submit()">
                            <i class="nav-icon fas fa-sign-out-alt"></i>
                            <p>Logout</p>
                            <form action="{{ route('logout') }}" method="POST" id="logout-form">
                                @csrf
                            </form>
                        </a>
                    </li>
                </ul>
            @endif
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>
