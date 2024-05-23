<!-- ========== Left Sidebar Start ========== -->
<div class="left-side-menu">
      <div class="h-100" data-simplebar>
        <!-- User box -->
        <div class="user-box text-center">
          <img src="assets/images/users/user-5.jpg" alt="user-img" title="Mat Helme" class="rounded-circle avatar-md" />
          <p class="text-muted mt-2">Admin Head</p>
        </div>

        <!--- Sidemenu -->
        <div id="sidebar-menu">
          <ul id="side-menu">
          <li>
              <a href="{{route('dashboard')}}">

                <span> Dashboard </span>
                
              </a>
            </li>
            <li>
            <a href="#sidebarEcommerce" data-toggle="collapse">
                <i data-feather="edit"></i>
                <span> Courses </span>
                <span class="menu-arrow"></span>
              </a>
              <div class="collapse" id="sidebarEcommerce">
                <ul class="nav-second-level">
                  <li>
                    <a href = "{{route('add-course')}}"><i data-feather="plus" class="pr-0 mr-1"></i>Add Courses</a>
                  </li>
                  <li>
                    <a href="{{route('show-course')}}"><i data-feather="edit" class="pr-0 mr-1"></i>Edit Course
                  </a>
                  </li>
                </ul>
              </div>
            </li>
            <li>
                <a href="#sidebarCrm" data-toggle="collapse">
                <i data-feather="users"></i>
                <span>  Students </span>
                <span class="menu-arrow"></span>
              </a>
              <div class="collapse" id="sidebarCrm">
                <ul class="nav-second-level">
                  <li>
                    <a href="{{route('manage-students')}}"><i data-feather="users" class="pr-0 mr-1"></i>Manage Students</a>
                  </li>
                </ul>
              </div>
            </li>
          </ul>
        </div>
        <!-- End Sidebar -->

        <div class="clearfix"></div>
      </div>
      <!-- Sidebar -left -->
    </div>
    <!-- Left Sidebar End -->