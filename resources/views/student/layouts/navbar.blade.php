<header id="header" class="header d-flex align-items-center fixed-top">
    <div class="container-fluid container-xl position-relative d-flex align-items-center">

      <a href="index.html" class="logo d-flex align-items-center me-auto">
        <!-- Uncomment the line below if you also wish to use an image logo -->
        <img src="{{ asset('bocilprik') }}/logo.png" alt="">
        <h1 class="sitename">BocilPrik Music</h1>
      </a>

      <nav id="navmenu" class="navmenu">
        <ul>
          <li><a href="/student/home" class="active">Home<br></a></li>
          <li><a href="/student/courses">Course</a></li>
          <li><a href="/student/sertif">Certification</a></li>
          <li><a href="/student/about_us">About Us</a></li>
        </ul>
        <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
      </nav>

      <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
        @csrf
    </form>
    
    <a class="btn-getstarted flex-md-shrink-0" href="#" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
        Logout
    </a>
    

    </div>
  </header>