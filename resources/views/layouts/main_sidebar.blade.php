<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
          <div class="btn btn text-center">
              <a> <h1  class="text-center"> <span class="text-secondary font-weight-bold border px-3 mr-1">W</span> Weef</h1></a>
          </div>
      </div>
      <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
{{--      <div class="user-panel mt-3 pb-3 mb-3 d-flex">--}}
{{--          <div class="col-lg-3 col-6 text-center">--}}
{{--              @if (Route::has('login'))--}}
{{--                  @auth--}}
{{--                      <img src="{{URL::asset('img/user.jpg')}}" alt="Image" class="img-fluid mr-3 mt-1}" style="width: 45px;">--}}
{{--                      <a href="{{ route('profile.edit') }}" class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">{{auth()->user()->name }}</a>--}}
{{--                  @else--}}
{{--                      <a href="{{ route('login') }}" class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Log in</a>--}}

{{--                      @if (Route::has('register'))--}}
{{--                          <a href="{{ route('register') }}" class="ml-4 font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Register</a>--}}
{{--                      @endif--}}
{{--                  @endauth--}}
{{--                  <br><br>--}}
{{--          </div>--}}
{{--          @endif--}}
{{--      </div>--}}
      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
              with font-awesome or any other icon font library -->
            <div class="btn btn">
                <a href="http://127.0.0.1:8000" class="d-block">Dashboard</a>
            </div>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-table"></i>
              <p>
                Tables
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>

            <ul class="nav nav-treeview">
                <li class="nav-item">
                    <a href="{{ route('sliders.index') }}" class="nav-link">
                        <i class="far fa-circle nav-icon"></i>
                        <p>Slider</p>
                    </a>
                </li>
              <li class="nav-item">
                <a href="{{ route('Categories.index') }}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Categories</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ route('Products.index') }}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Products</p>
                </a>
              </li>
                <li class="nav-item">
                    <a href="{{ route('blogs.index') }}" class="nav-link">
                        <i class="far fa-circle nav-icon"></i>
                        <p>Blogs</p>
                    </a>
                </li>
        </ul>
        </ul>
      </nav>
    </div>
    </div>
</aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h4 class="m-0">Dashboard @yield('title_page2') @yield('title_page')</h4>
          </div><!-- /.col -->
          <div class="col-sm-6">
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->
