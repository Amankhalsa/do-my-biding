<header>
      <div class="headerColMain">
        <div class="container">
          <div class="row g-2 align-items-center">
            <div class="col-auto">
              <div class="logoCol">
                <a href="{{url('/')}}">
                  <img src="{{asset('frontend/images/logo.png')}}" alt="...">
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
                      <a href="javascript:void(0)">
                        <span class="menuIcon"><img src="{{asset('frontend/images/menu-icon-2.png')}}" alt=""></span>
                        <span class="menuText">Post a Service</span>
                      </a>
                    </li>
                    <li>
                      <a href="javascript:void(0)" class="mLink2">
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
                          <a href="{{route('login')}}">login</a>
                        </li>
                        <li>
                          <a href="{{route('register')}}">register</a>
                        </li>
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