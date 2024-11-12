 <!-- Navbar -->
 <?php  $user = auth()->guard('admin')->user();?>
 <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
     
    </ul>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
    
      <li class="nav-item">
        <a class="nav-link" data-widget="fullscreen" href="#" role="button">
          <i class="fas fa-expand-arrows-alt"></i>
        </a>
      </li>
      
      <li class="nav-item">
          <a class="dropdown-item" href="#" style="text-transform: capitalize;">
                {{$user->name }}
            </a>
     </li>
      <!-- <li class="nav-item">
        <a class="nav-link" data-widget="control-sidebar" data-controlsidebar-slide="true" href="#" role="button">
          <i class="fas fa-th-large"></i>
        </a>
      </li> -->
    </ul>
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <!--<a href="#" class="brand-link">-->
    <!--  <img src="{{asset('public/admin/image/shortlogo.png')}}" alt="Pribson" class="brand-image img-circle elevation-3">-->
    <!--  <span style="text-transform: capitalize;" class="brand-text font-weight-light">Army Gun House</span>-->
    <!--</a>-->
    <a href="#" class="">
      <img  src="{{url('public/website/image/logo.svg')}}" alt="Pribson" class="brand-image toplogo" style="float:unset !important;width: 185px;
    padding: 10px;">
      <!-- <span style="text-transform: capitalize;" class="brand-text font-weight-light">Wishpik</span> -->
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <!-- <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="{{asset('public/admin/dist/img/user2-160x160.jpg')}}" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">Alexander Pierce</a>
        </div>
      </div> -->

      <!-- SidebarSearch Form -->
    

      <!-- Sidebar Menu -->
    <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <li class="nav-item {{ Request::routeIs('admin.dashboard') ? 'menu-open' : '' }}">
            <a href="{{ route('admin.dashboard') }}" class="nav-link {{ Request::routeIs('admin.dashboard') ? 'active' : '' }}">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>Dashboard</p>
            </a>
          </li>
         
          <li class="nav-item {{ Request::routeIs('admin.category') ? 'menu-open' : '' }}">
            <a href="{{ route('admin.category') }}" class="nav-link {{ Request::routeIs('admin.category') ? 'active' : '' }}">
              <i class="fa-solid fa-th"></i>
              <p>All Category</p>
            </a>
          </li>
       
          <li class="nav-item {{ Request::routeIs('admin.product_list') ? 'menu-open' : '' }}">
            <a href="{{ route('admin.product_list') }}" class="nav-link {{ Request::routeIs('admin.product_list') ? 'active' : '' }}">
              <i class="fa-regular fa-address-card"></i>
              <p>All Templates</p>
            </a>
          </li>
          <li class="nav-item {{ Request::routeIs('admin.customer_list') ? 'menu-open' : '' }}">
            <a href="{{ route('admin.customer_list') }}" class="nav-link {{ Request::routeIs('admin.customer_list') ? 'active' : '' }}">
              <i class="fa-solid fa-th"></i>
              <p>All Customer</p>
            </a>
          </li>

          <li class="nav-item {{ Request::routeIs('admin.logout') ? 'menu-open' : '' }}">
            <a href="{{ route('admin.logout') }}" class="nav-link">
              <i class="fa-regular fas fa-th"></i>
              <p>Log out</p>
            </a>
            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                @csrf
            </form>
          </li>
        </ul>
    </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>
 <script>
    $(document).ready(function() {
      $('.nav-link').on('click', function() {
        $('.nav-item').removeClass('menu-open');
        $(this).parent('.nav-item').addClass('menu-open');
      });
    });
    </script>