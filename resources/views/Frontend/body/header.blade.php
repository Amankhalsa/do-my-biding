@php 
$get_logo = DB::table('sitelogos')->first();
@endphp
<header>
      <div class="headerColMain">
        <div class="container">
          <div class="row g-2 align-items-center">
            <div class="col-auto">
              <div class="logoCol">
                <a href="{{url('/')}}">
          <img src="{{(!empty($get_logo->logo)? asset($get_logo->logo) : asset($get_logo->logo))}}">
                </a>
              </div>
            </div>
            <div class="col">
              <div class="navigationCol">
                <div class="navCol text-center">
                  <ul>
                    <li>
                      <a href="javascript:void(0)">
                        <span class="menuIcon"><img src="{{asset('frontend/images/menu-icon-1.png')}}" alt=""></span>
                        <span class="menuText">Get bidding!</span>
                      </a>
                    </li>
                    <li>
                      <a href="{{route('add.page.view')}}">
                        <span class="menuIcon"><img src="{{asset('frontend/images/menu-icon-2.png')}}" alt=""></span>
                        <span class="menuText">Post a Service</span>
                      </a>
                    </li>
                    <li>
                      <a href="{{route('serives.page')}}" class="mLink2">
                        <span class="menuIcon"><img src="{{asset('frontend/images/menu-icon-3.png')}}" alt=""></span>
                        <span class="menuText">Browse Services</span>
                      </a>
                    </li>
                    <li>
                      <a href="javascript:void(0)" class="mLink2">
                        <span class="menuIcon"><img src="{{asset('frontend/images/menu-icon-4.png')}}" alt=""></span>
                        <span class="menuText">Service Providers</span>
                      </a>
                    </li>
                    <li>
                      <a href="{{route('user.profile')}}" class="mLink2">
                        <span class="menuIcon"><img src="{{asset('frontend/images/user.png')}}" alt=""></span>
                        <span class="menuText"> Profile</span>
                      </a>
                    </li>
                    
                  </ul>
                </div>
              </div>
            </div>
            <div class="col-auto">
              <div class="headerRightCol">
                <div class="row align-items-center g-0">
                  <div class="col">
                    <div class="logCol">
                      <ul>
                        <li>
                             @auth
                          <form method="POST" action="{{ route('logout') }}">
                            @csrf
                            <a href="route('logout')"onclick="event.preventDefault();this.closest('form').submit();">
                                {{ __('Log Out') }}
                            </a>
                        </form>
                        @else
                          <a href="{{route('login')}}">login</a>

                        </li>
                        <li>
                          <a href="{{route('register')}}">register</a>
                        </li>
                         @endauth
                      </ul>
                    </div>
                  </div>
                  <div class="col-auto d-lg-none">
                    <div class="toggle ps-3">
                      <a href="javascript:void(0)" class="navTrigger"><img src="{{asset('frontend/images/nav-toggle.svg')}}" alt="Image Not Found"></a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </header>