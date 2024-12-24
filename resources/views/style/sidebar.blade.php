<aside class="left-sidebar">
  <div>
    <div class="brand-logo d-flex align-items-center justify-content-between">
      <a href="#" class="text-nowrap logo-img">
        <img src="{{ asset('assets') }}/logo.png" width="100" alt="" />
      </a>
      <div class="close-btn d-xl-none d-block sidebartoggler cursor-pointer" id="sidebarCollapse">
        <i class="ti ti-x fs-8"></i>
      </div>
    </div>
    <nav class="sidebar-nav scroll-sidebar" data-simplebar="">
      <ul id="sidebarnav">
        <!-- Home Section -->
        <li class="nav-small-cap">
          <i class="ti ti-dots nav-small-cap-icon fs-4"></i>
          <span class="hide-menu">Home</span>
        </li>
        <li class="sidebar-item">
          <a class="sidebar-link" href="/admin/dashboard" aria-expanded="false">
            <span>
              <i class="ti ti-layout-dashboard"></i>
            </span>
            <span class="hide-menu">Dashboard</span>
          </a>
        </li>
        
        <!-- Course Management Section -->
        <li class="nav-small-cap">
          <i class="ti ti-dots nav-small-cap-icon fs-4"></i>
          <span class="hide-menu">Course Management</span>
        </li>
        <li class="sidebar-item">
          <a class="sidebar-link" href="/admin/courses" aria-expanded="false">
            <span>
              <i class="ti ti-article"></i>
            </span>
            <span class="hide-menu">Manage Course</span>
          </a>
        </li>
        <li class="sidebar-item">
          <a class="sidebar-link" href="/sections" aria-expanded="false">
            <span>
              <i class="ti ti-list-details"></i>
            </span>
            <span class="hide-menu">Manage Section</span>
          </a>
        </li>
        <li class="sidebar-item">
          <a class="sidebar-link" href="/admin/materials" aria-expanded="false">
            <span>
              <i class="ti ti-article"></i>
            </span>
            <span class="hide-menu">Manage Material</span>
          </a>
        </li>
        <!-- Quiz Management -->
        <li class="nav-small-cap">
          <i class="ti ti-dots nav-small-cap-icon fs-4"></i>
          <span class="hide-menu">Quiz Management</span>
        </li>
        <li class="sidebar-item">
          <a class="sidebar-link" href="/quizzes" aria-expanded="false">
            <span>
              <i class="ti ti-help"></i>
            </span>
            <span class="hide-menu">Manage Quizzes</span>
          </a>
        </li>
        <li class="sidebar-item">
          <a class="sidebar-link" href="{{ route('quiz_questions.index') }}" aria-expanded="false">
              <span>
                  <i class="ti ti-help"></i>
              </span>
              <span class="hide-menu">Manage Quiz Questions</span>
          </a>
      </li>
      
        <!-- Auth Section -->
        <li class="nav-small-cap">
          <i class="ti ti-dots nav-small-cap-icon fs-4"></i>
          <span class="hide-menu">AUTH</span>
        </li>
        <li class="sidebar-item">
          <form action="{{ route('logout') }}" method="POST" style="display:inline;" onclick="return confirm('Are you sure you want to logout?')">
              @csrf
              <button type="submit" class="sidebar-link" aria-expanded="false">
                  <span>
                      <i class="ti ti-login"></i>
                  </span>
                  <span class="hide-menu">Logout</span>
              </button>
          </form>
      </li>
      
      </ul>
    </nav>
  </div>
</aside>
