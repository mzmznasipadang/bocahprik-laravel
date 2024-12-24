<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>BocilPrik Music | Dashboard</title>
  <link rel="shortcut icon" type="image/png" href="{{ asset('assets') }}/images/logos/favicon.png" />
  <link rel="stylesheet" href="{{ asset('assets') }}/css/styles.min.css" />
</head>

<body>
  <!--  Body Wrapper -->
  <div class="page-wrapper" id="main-wrapper" data-layout="vertical" data-navbarbg="skin6" data-sidebartype="full"
    data-sidebar-position="fixed" data-header-position="fixed">
    <!-- Sidebar Start -->
    @include('style/sidebar')


    <!--  Sidebar End -->
    <!--  Main wrapper -->
    <div class="body-wrapper">
      <!--  Header Start -->
      <header class="app-header">
        <nav class="navbar navbar-expand-lg navbar-light">
          <ul class="navbar-nav">
            <li class="nav-item d-block d-xl-none">
              <a class="nav-link sidebartoggler nav-icon-hover" id="headerCollapse" href="javascript:void(0)">
                <i class="ti ti-menu-2"></i>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link nav-icon-hover" href="javascript:void(0)">
                <i class="ti ti-bell-ringing"></i>
                <div class="notification bg-primary rounded-circle"></div>
              </a>
            </li>
          </ul>
          <div class="navbar-collapse justify-content-end px-0" id="navbarNav">
            <ul class="navbar-nav flex-row ms-auto align-items-center justify-content-end">
              
              <li class="nav-item dropdown">
                <a class="nav-link nav-icon-hover" href="javascript:void(0)" id="drop2" data-bs-toggle="dropdown"
                  aria-expanded="false">
                  <img src="{{ asset('assets') }}/images/profile/user-1.jpg" alt="" width="35" height="35" class="rounded-circle">
                </a>
                <div class="dropdown-menu dropdown-menu-end dropdown-menu-animate-up" aria-labelledby="drop2">
                  <div class="message-body">
                    
                    <a href="/logout" class="btn btn-outline-primary mx-3 mt-2 d-block">Logout</a>
                  </div>
                </div>
              </li>
            </ul>
          </div>
        </nav>
      </header>
      <!--  Header End -->
      <div class="container-fluid">
        @yield('container')
        <!--  Row 1 -->
        
        <div class="py-6 px-6 text-center">
          <p class="mb-0 fs-4">Design and Developed by <a href=#" target="_blank" class="pe-1 text-primary text-decoration-underline">BocilPrik Music</a> </p>
        </div>
      </div>
    </div>
  </div>
  <script src="{{ asset('assets') }}/libs/jquery/dist/jquery.min.js"></script>
  <script src="{{ asset('assets') }}/libs/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
  <script src="{{ asset('assets') }}/js/sidebarmenu.js"></script>
  <script src="{{ asset('assets') }}/js/app.min.js"></script>
  <script src="{{ asset('assets') }}/libs/apexcharts/dist/apexcharts.min.js"></script>
  <script src="{{ asset('assets') }}/libs/simplebar/dist/simplebar.js"></script>
  <script src="{{ asset('assets') }}/js/dashboard.js"></script>
</body>

</html>