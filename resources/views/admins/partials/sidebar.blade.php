<header class="main-nav">
    <div class="sidebar-user text-center"><a class="setting-primary" href="javascript:void(0)"><i data-feather="settings"></i></a><img class="img-90 rounded-circle" src="{{asset('backend/images/dashboard/1.png')}}" alt="">
      <div class="badge-bottom"><span class="badge badge-primary">New</span></div><a href="user-profile.html">
        <h6 class="mt-3 f-14 f-w-600">Emay Walter</h6></a>
      <p class="mb-0 font-roboto">Human Resources Department</p>
    </div>
    <nav>
      <div class="main-navbar">
        <div class="left-arrow" id="left-arrow"><i data-feather="arrow-left"></i></div>
        <div id="mainnav">           
          <ul class="nav-menu custom-scrollbar">
            <li class="back-btn">
              <div class="mobile-back text-end"><span>Back</span><i class="fa fa-angle-right ps-2" aria-hidden="true"></i></div>
            </li>
            <li><a class="nav-link menu-title link-nav" href="{{ route('admins.index') }}"><i data-feather="home"></i><span>Dashboard</span></a></li>
            
            <li class="dropdown"><a class="nav-link menu-title" href="javascript:void(0)"><i data-feather="layout"></i><span>Pages</span></a>
              <ul class="nav-submenu menu-content">
                <li><a href="{{ route('admins.pages.index') }}">All</a></li>
                <li><a href="javascript:void(0)">Add new</a></li>
              </ul>
            </li>

            <li class="dropdown"><a class="nav-link menu-title" href="javascript:void(0)"><i data-feather="git-merge"></i><span>Categories</span></a>
              <ul class="nav-submenu menu-content">
                <li><a href="{{ route('admins.categories.index') }}">All</a></li>
                <li><a href="javascript:void(0)">Add new</a></li>
              </ul>
            </li>
            
            <li class="dropdown"><a class="nav-link menu-title" href="javascript:void(0)"><i data-feather="file-text"></i><span>Posts</span></a>
              <ul class="nav-submenu menu-content">
                <li><a href="{{ route('admins.posts.index') }}">All</a></li>
                <li><a href="javascript:void(0)">Add new</a></li>
              </ul>
            </li>

            <li class="dropdown"><a class="nav-link menu-title" href="javascript:void(0)"><i data-feather="briefcase"></i><span>Courses</span></a>
              <ul class="nav-submenu menu-content">
                <li><a href="index.html">All</a></li>
                <li><a href="javascript:void(0)">Add new</a></li>
                <li><a href="javascript:void(0)">Teachers</a></li>
              </ul>
            </li>

            <li class="dropdown"><a class="nav-link menu-title" href="javascript:void(0)"><i data-feather="shield"></i><span>Servies</span></a>
              <ul class="nav-submenu menu-content">
                <li><a href="index.html">All</a></li>
                <li><a href="javascript:void(0)">Add new</a></li>
              </ul>
            </li>

            <li class="dropdown"><a class="nav-link menu-title" href="javascript:void(0)"><i data-feather="shopping-cart"></i><span>Products</span></a>
              <ul class="nav-submenu menu-content">
                <li><a href="index.html">All</a></li>
                <li><a href="javascript:void(0)">Add new</a></li>
              </ul>
            </li>

            <li class="dropdown"><a class="nav-link menu-title" href="javascript:void(0)"><i data-feather="users"></i><span>Users</span></a>
              <ul class="nav-submenu menu-content">
                <li><a href="index.html">All</a></li>
                <li><a href="javascript:void(0)">Add new</a></li>
              </ul>
            </li>

            <li class="dropdown"><a class="nav-link menu-title" href="javascript:void(0)"><i data-feather="settings"></i><span>Setting</span></a>
              <ul class="nav-submenu menu-content">
                <li><a href="index.html">General</a></li>
                <li><a href="javascript:void(0)">Google analytics</a></li>
                <li><a href="javascript:void(0)">Google search console</a></li>
                <li><a href="javascript:void(0)">...</a></li>
              </ul>
            </li>
            
          </ul>
        </div>
        <div class="right-arrow" id="right-arrow"><i data-feather="arrow-right"></i></div>
      </div>
    </nav>
  </header>