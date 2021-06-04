<div class="sidebar" data-color="purple" data-background-color="white" data-image="{{ asset('public/nowui/assets/img/sidebar-1.jpg') }}">

      <!--
        Tip 1: You can change the color of the sidebar using: data-color="purple | azure | green | orange | danger"

        Tip 2: you can also add an image using data-image tag
    -->
      <div class="logo"><a href="http://www.creative-tim.com" class="simple-text logo-normal">
        Teacher
        </a></div>
      <div class="sidebar-wrapper ps-container ps-theme-default" data-ps-id="1c7b810e-dddb-7a55-60c3-7b16be69eedd">
        <ul class="nav">
          <li class="nav-item {{ Route::currentRouteName() == 'dashboard' ? 'active' : '' }}  ">
            <a class="nav-link" href="{{ route('dashboard') }}">
              <i class="material-icons">dashboard</i>
              <p>Dashboard</p>
            </a>
          </li>
          <li class="nav-item {{ Route::currentRouteName() == 'grading' ? 'active' : '' }}">
            <a class="nav-link" href="{{ route('grading') }}">
              <i class="material-icons">library_books</i>
              <p>Grading System</p>
            </a>
          </li>
          <li class="nav-item {{ Route::currentRouteName() == 'courses' ? 'active' : '' }}">
            <a class="nav-link" href="{{ route('courses') }}">
              <i class="material-icons">library_books</i>
              <p>Courses</p>
            </a>
          </li>
          <li class="nav-item {{ Route::currentRouteName() == 'reports' ? 'active' : '' }}">
            <a class="nav-link" href="{{ route('reports') }}">
              <i class="material-icons">library_books</i>
              <p>Reports</p>
            </a>
          </li>
          <li class="nav-item ">
            <a class="nav-link" href="{{ url('/logout') }}">
              <i class="material-icons">exit_to_app</i>
              <p>Logout</p>
            </a>
          </li>
        </ul>
      <div class="ps-scrollbar-x-rail" style="left: 0px; bottom: 0px;"><div class="ps-scrollbar-x" tabindex="0" style="left: 0px; width: 0px;"></div></div><div class="ps-scrollbar-y-rail" style="top: 0px; right: 0px;"><div class="ps-scrollbar-y" tabindex="0" style="top: 0px; height: 0px;"></div></div></div>
    <div class="sidebar-background" style="background-image: url(../assets/img/sidebar-1.jpg) "></div></div>
