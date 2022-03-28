<div class="topBar">
        <div class="row align-items-center">
          <div class="col">
            <div class="headerLeftCol">
              <div class="row align-items-center">
                <div class="col-auto">
                  <a href="javascript:void(0)" class="navTrigger2">
                    <img src="{{asset('frontend/images/hamburger-icon.png')}}" alt="...">
                  </a>
                </div>
                <div class="col">
                  <div class="dbSearchCol">
                    <span class="searchIcon"><img src="{{asset('frontend/images/search.png')}}" alt="..." width="13"></span>
                    <input type="text" placeholder="Search..." class="form-control">
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-auto">
            <div class="headerRightOptions">
              <ul>
                <li>
                  <div class="msgDDCol ddParent">
                    <a href="javascript:void(0)" class="ddTrigger"><span class="ddTriggerContent">
                      <img src="{{asset('frontend/images/grid-icon2.png')}}" alt="..."> <span class="unreadIndicator"></span></span></a>
                  </div>
                </li>
                <li>
                  <div class="notifyDDCol ddParent">
                    <a href="javascript:void(0)" class="ddTrigger"><span class="ddTriggerContent">
                      <img src="{{asset('frontend/images/bell-icon.png')}}" alt="..."> <span class="unreadIndicator"></span></span></a>
                  </div>
                </li>
                <li>
                  <a href="{{route('admin.logout')}} "> <span><img src="{{asset('frontend/images/logout-icon.png')}}" alt="..."></span> <span>Logout</span></a>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </div>