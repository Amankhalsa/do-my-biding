<div class="sidebarCol">
      <div class="sidebarLogo">
        <a href="{{route('admin.dashboard')}}">
          <img src="{{asset('frontend/images/logo.png')}}" alt="...">
        </a>
      </div>
      <div class="sidebarNavCol">
        <ul class="sidebarNav">
          <li class="navItem">
            <a href="{{route('admin.dashboard')}}" class="navLink active">
              <span class="navIcon">
                <img src="{{asset('frontend/images/nav-icon-1.png')}}" alt="...">
              </span>
              <span class="navText">Dashboard</span>
            </a>
          </li>
          <li class="navItem sMenuLink">
            <a href="#" class="navLink">
              <span class="navIcon">
                <img src="{{asset('frontend/images/nav-icon-2.png')}}" alt="...">
              </span>
              <span class="navText">Site Settings</span>
            </a>
              <div class="submenuColMain">
              <ul class="subMenuCol">
              <li><a href="{{url('/')}}" class="subMenuLink">Viit site </a></li>
                <li><a href="{{route('view.all.location')}}" class="subMenuLink" target="_blank">Add Locations</a></li>
  
              </ul>
            </div>
          </li>
          <!-- ========= logo setting   =========-->
          <li class="navItem">
            <a href="{{route('view.site.logo')}}" class="navLink">
              <span class="navIcon">
                <img src="{{asset('frontend/images/nav-icon-3.png')}}" alt="...">
              </span>
              <span class="navText">Logo Settings</span>
            </a>
          </li>
          <!-- ========= Banner images   =========-->
          <li class="navItem">
            <a href="{{route('view.front.banners')}}" class="navLink">
              <span class="navIcon">
                <img src="{{asset('frontend/images/nav-icon-4.png')}}" alt="...">
              </span>
              <span class="navText">Banner Image</span>
            </a>
          </li>
          <!-- ========= Admin User  =========-->
          <li class="navItem">
            <a href="{{ route('add.admin_user')}}" class="navLink">
              <span class="navIcon">
                <img src="{{asset('frontend/images/nav-icon-12.png')}}" alt="...">
              </span>
              <span class="navText">Admin User</span>
            </a>
          </li>
          <!-- ========= Admin User  ========= -->
          <!-- ========= Manage Users  ========= -->
          <li class="navItem sMenuLink">
            <a href="javascript:void(0)" class="navLink">
              <span class="navIcon">
                <img src="{{asset('frontend/images/nav-icon-10.png')}}" alt="...">
              </span>
              <span class="navText">Manage Users</span>
            </a>
            <div class="submenuColMain">
              <ul class="subMenuCol">
                <li><a href="{{ route('add.site_user')}}" class="subMenuLink">Site users </a></li>
                <!-- <li><a href="javascript:void(0)" class="subMenuLink">Reset Password</a></li> -->
              </ul>
            </div>
          </li>
          <!--  ========= Manage Users  =========-->
          <!-- ========= Categories =========== -->
          <li class="navItem sMenuLink">
            <a href="javascript:void(0)" class="navLink">
              <span class="navIcon">
                <img src="{{asset('frontend/images/nav-icon-14.png')}}" alt="...">
              </span>
              <span class="navText">Categories</span>
            </a>
            <div class="submenuColMain">
              <ul class="subMenuCol">
                <li><a href="{{route('view.front.category')}}" class="subMenuLink">Categories</a></li>
                <li><a href="{{route('view.front.subcategory')}}" class="subMenuLink">Sub Categories </a></li>
                <li><a href="{{route('view.front.sub_subcategory')}}" class="subMenuLink">Sub SubCategories </a></li>

              </ul>
            </div>
          </li>
        <!-- ============== Categories ================ -->
          <li class="navItem">
            <a href="javascript:void(0)" class="navLink">
              <span class="navIcon">
                <img src="{{asset('frontend/images/nav-icon-5.png')}}" alt="...">
              </span>
              <span class="navText">Payment Settings</span>
            </a>
          </li>
          <li class="navItem">
            <a href="javascript:void(0)" class="navLink">
              <span class="navIcon">
                <img src="{{asset('frontend/images/nav-icon-6.png')}}" alt="...">
              </span>
              <span class="navText">Email Settings</span>
            </a>
          </li>
          <li class="navItem">
            <a href="javascript:void(0)" class="navLink">
              <span class="navIcon">
                <img src="{{asset('frontend/images/nav-icon-7.png')}}" alt="...">
              </span>
              <span class="navText">API Settings</span>
            </a>
          </li>
          <li class="navItem sMenuLink">
            <a href="javascript:void(0)" class="navLink">
              <span class="navIcon">
                <img src="{{asset('frontend/images/nav-icon-8.png')}}" alt="...">
              </span>
              <span class="navText">SMS</span>
            </a>
            <div class="submenuColMain">
              <ul class="subMenuCol">
                <li><a href="javascript:void(0)" class="subMenuLink">Option 1</a></li>
                <li><a href="javascript:void(0)" class="subMenuLink">Option 2</a></li>
              </ul>
            </div>
          </li>
          <li class="navItem sMenuLink">
            <a href="javascript:void(0)" class="navLink">
              <span class="navIcon">
                <img src="{{asset('frontend/images/nav-icon-9.png')}}" alt="...">
              </span>
              <span class="navText">Payments</span>
            </a>
            <div class="submenuColMain">
              <ul class="subMenuCol">
                <li><a href="javascript:void(0)" class="subMenuLink">Option 1</a></li>
                <li><a href="javascript:void(0)" class="subMenuLink">Option 2</a></li>
              </ul>
            </div>
          </li>
            
            
          <li class="navItem sMenuLink">
            <a href="javascript:void(0)" class="navLink">
              <span class="navIcon">
                <img src="{{asset('frontend/images/nav-icon-11.png')}}" alt="...">
              </span>
              <span class="navText">Manage Packages</span>
            </a>
            <div class="submenuColMain">
              <ul class="subMenuCol">
                <li><a href="javascript:void(0)" class="subMenuLink">Option 1</a></li>
                <li><a href="javascript:void(0)" class="subMenuLink">Option 2</a></li>
              </ul>
            </div>
          </li>

   
          <li class="navItem">
            <a href="{{route('front.bid.view')}}" class="navLink">
              <span class="navIcon">
                <img src="{{asset('frontend/images/nav-icon-15.png')}}" alt="...">
              </span>
              <span class="navText">Bids</span>
            </a>
          </li>
          <li class="navItem">
            <a href="javascript:void(0)" class="navLink">
              <span class="navIcon">
                <img src="{{asset('frontend/images/nav-icon-16.png')}}" alt="...">
              </span>
              <span class="navText">Jobs</span>
            </a>
          </li>
          {{-- <li class="navItem">
            <a href="javascript:void(0)" class="navLink">
              <span class="navIcon">
                <img src="{{asset('frontend/images/nav-icon-17.png')}}" alt="...">
              </span>
              <span class="navText">Auctions</span>
            </a>
          </li> --}}
          {{-- <li class="navItem sMenuLink">
            <a href="javascript:void(0)" class="navLink">
              <span class="navIcon">
                <img src="{{asset('frontend/images/nav-icon-18.png')}}" alt="...">
              </span>
              <span class="navText">MarketPlace</span>
            </a>
            <div class="submenuColMain">
              <ul class="subMenuCol">
                <li><a href="javascript:void(0)" class="subMenuLink">Option 1</a></li>
                <li><a href="javascript:void(0)" class="subMenuLink">Option 2</a></li>
              </ul>
            </div>
          </li> --}}
          
          <li class="navItem">
            <a href="javascript:void(0)" class="navLink">
              <span class="navIcon">
                <img src="{{asset('frontend/images/nav-icon-19.png')}}" alt="...">
              </span>
              <span class="navText">Dispute</span>
            </a>
          </li>
          <li class="navItem">
            <a href="javascript:void(0)" class="navLink">
              <span class="navIcon">
                <img src="{{asset('frontend/images/nav-icon-20.png')}}" alt="...">
              </span>
              <span class="navText">Dispute Faqs</span>
            </a>
          </li>
          <li class="navItem">
            <a href="javascript:void(0)" class="navLink">
              <span class="navIcon">
                <img src="{{asset('frontend/images/nav-icon-21.png')}}" alt="...">
              </span>
              <span class="navText">Manage Static Pages</span>
            </a>
          </li>
          <li class="navItem">
            <a href="javascript:void(0)" class="navLink">
              <span class="navIcon">
                <img src="{{asset('frontend/images/nav-icon-22.png')}}" alt="...">
              </span>
              <span class="navText">Reports</span>
            </a>
          </li>
        </ul>
      </div>
    </div>