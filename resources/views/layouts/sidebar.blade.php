  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-dark d-flex  justify-content-between">
      <!-- Left navbar links -->
      <ul class="navbar-nav">
          <li class="nav-item w-100">
              <a class="nav-link w-100 d-flex align-items-center justyfy-content-center" data-widget="pushmenu"
                  href="#" role="button">
                  <i class="fas fa-bars"></i>

              </a>
          </li>

      </ul>
      <ul class="d-flex justify-content-center align-items-center m-0 p-0">
          @auth
              <p class="text-white p-0 m-3">{{ auth()->user()->name }}</p>
              <a href="" data-bs-toggle="dropdown" aria-expanded="false">
                  <img class="rounded-circle me-5" style="height: 30px"
                      src="{{ asset('LTE/docs/assets/img/user4-128x128.jpg') }}" alt="">
              </a>
              <ul class="dropdown-menu dropdown-menu-dark" style="right: 3rem ; left:65rem">
                  <form action="/logout" method="post">
                      @csrf
                      <li><button class="dropdown-item" href="/logout">Logout</button></li>
                  </form>
              </ul>
          @endauth
      </ul>
  </nav>

  <aside class="main-sidebar sidebar-dark-primary elevation-4">
      <!-- Brand Logo -->
      <a href="/" class="brand-link">
          <img src="{{ asset('LTE') }}/dist/img/AdminLTELogo.png" alt="AdminLTE Logo"
              class="brand-image img-circle elevation-3" style="opacity: 0.8">
          <span class="brand-text font-weight-light">FiqsssApp</span>
      </a>

      <!-- Sidebar -->
      <div class="sidebar">
          <!-- Sidebar user panel (optional) -->


          <!-- SidebarSearch Form -->

          <!-- Sidebar Menu -->
          <nav class="mt-2">
              <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                  data-accordion="false">
                  <!-- Add icons to the links using the .nav-icon class
             with font-awesome or any other icon font library -->

                  <li
                      class="nav-item {{ $title == 'barangmasuk' || $title == 'Vendor' || $title == 'databarang' ? 'menu-is-opening menu-open' : '' }}">
                      <a
                          class="nav-link {{ $title == 'barangmasuk' || $title == 'Vendor' || $title == 'databarang' ? 'active ' : '' }}">
                          <i class="nav-icon fas fa-table"></i>
                          <p>
                              Data
                              <i class="fas fa-angle-left right"></i>
                          </p>
                      </a>
                      <ul class="nav nav-treeview"
                          style="display: {{ $title == 'barangmasuk' || $title == 'Vendor' || $title == 'databarang' ? 'block' : 'none' }}">

                          <li class="nav-item">
                              <a href="/" class="nav-link {{ $title == 'barangmasuk' ? 'active ' : '' }}">
                                  <i class="far fa-circle nav-icon"></i>
                                  <p>Data Barang masuk </p>
                              </a>
                          </li>
                          <li class="nav-item">
                              <a href="/vendor" class="nav-link  {{ $title == 'Vendor' ? 'active ' : '' }}">
                                  <i class="far fa-circle nav-icon"></i>
                                  <p>Vendor</p>
                              </a>
                          </li>
                          <li class="nav-item">
                              <a href="/databarang" class="nav-link  {{ $title == 'databarang' ? 'active ' : '' }}">
                                  <i class="far fa-circle nav-icon"></i>
                                  <p>Data Barang</p>
                              </a>
                          </li>
                      </ul>
                  </li>
                  <!-- /.sidebar -->
  </aside>
