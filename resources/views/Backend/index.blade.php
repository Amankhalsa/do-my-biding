@extends('Backend.admin_master')
@section('title', 'Admin Dashboard')
@section('admin_section')
<section>
    <div class="dbPageContent">
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
      <div class="pageContentMain">
        <div class="dbTitleCol">
          <h4 class="mdTitle darkColor">Latest Activity</h4>
          <div class="breadcrumbCol p-0">
            <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
              <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                <li class="breadcrumb-item active" aria-current="page">Dashboard </li>
              </ol>
            </nav>
          </div>
        </div>
        <div class="row g-3  row-cols-sm-2 row-cols-lg-3 row-cols-xxl-4">
          <div class="col">
            <div class="dbCardStyle">
              <div class="row g-2">
                <div class="col">
                  <span class="dbCount">13</span>
                </div>
                <div class="col-auto">
                  <span class="dbCardIcon"><img src="{{asset('frontend/images/db-icon-1.png')}}" alt="..."></span>
                </div>
              </div>
              <span class="progressLbl">Total Users Member</span>
              <div class="progress progressStyle progressColor1">
                <div class="progress-bar" role="progressbar" style="width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
              </div>
            </div>
          </div>
          <div class="col">
            <div class="dbCardStyle">
              <div class="row g-2">
                <div class="col">
                  <span class="dbCount">7</span>
                </div>
                <div class="col-auto">
                  <span class="dbCardIcon"><img src="{{asset('frontend/images/db-icon-2.png')}}" alt="..."></span>
                </div>
              </div>
              <span class="progressLbl">Total Owners Member</span>
              <div class="progress progressStyle progressColor2">
                <div class="progress-bar" role="progressbar" style="width: 75%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
              </div>
            </div>
          </div>
          <div class="col">
            <div class="dbCardStyle">
              <div class="row g-2">
                <div class="col">
                  <span class="dbCount">6</span>
                </div>
                <div class="col-auto">
                  <span class="dbCardIcon"><img src="{{asset('frontend/images/db-icon-3.png')}}" alt="..."></span>
                </div>
              </div>
              <span class="progressLbl">Total Employees Member</span>
              <div class="progress progressStyle progressColor3">
                <div class="progress-bar" role="progressbar" style="width: 80%" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
              </div>
            </div>
          </div>
          <div class="col">
            <div class="dbCardStyle">
              <div class="row g-2">
                <div class="col">
                  <span class="dbCount">13</span>
                </div>
                <div class="col-auto">
                  <span class="dbCardIcon"><img src="{{asset('frontend/images/db-icon-4.png')}}" alt="..."></span>
                </div>
              </div>
              <span class="progressLbl">Today Jobs</span>
              <div class="progress progressStyle progressColor4">
                <div class="progress-bar" role="progressbar" style="width: 70%" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100"></div>
              </div>
            </div>
          </div>
          <div class="col">
            <div class="dbCardStyle">
              <div class="row g-2">
                <div class="col">
                  <span class="dbCount">12</span>
                </div>
                <div class="col-auto">
                  <span class="dbCardIcon"><img src="{{asset('frontend/images/db-icon-5.png')}}" alt="..."></span>
                </div>
              </div>
              <span class="progressLbl">This Week Jobs</span>
              <div class="progress progressStyle progressColor5">
                <div class="progress-bar" role="progressbar" style="width: 95%" aria-valuenow="95" aria-valuemin="0" aria-valuemax="100"></div>
              </div>
            </div>
          </div>
          <div class="col">
            <div class="dbCardStyle">
              <div class="row g-2">
                <div class="col">
                  <span class="dbCount">6</span>
                </div>
                <div class="col-auto">
                  <span class="dbCardIcon"><img src="{{asset('frontend/images/db-icon-6.png')}}" alt="..."></span>
                </div>
              </div>
              <span class="progressLbl">This Month Jobs</span>
              <div class="progress progressStyle progressColor6">
                <div class="progress-bar" role="progressbar" style="width: 80%" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
              </div>
            </div>
          </div>
          <div class="col">
            <div class="dbCardStyle">
              <div class="row g-2">
                <div class="col">
                  <span class="dbCount">13</span>
                </div>
                <div class="col-auto">
                  <span class="dbCardIcon"><img src="{{asset('frontend/images/db-icon-7.png')}}" alt="..."></span>
                </div>
              </div>
              <span class="progressLbl">This Year Jobs</span>
              <div class="progress progressStyle progressColor7">
                <div class="progress-bar" role="progressbar" style="width: 70%" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100"></div>
              </div>
            </div>
          </div>
          <div class="col">
            <div class="dbCardStyle">
              <div class="row g-2">
                <div class="col">
                  <span class="dbCount">12</span>
                </div>
                <div class="col-auto">
                  <span class="dbCardIcon"><img src="{{asset('frontend/images/db-icon-8.png')}}" alt="..."></span>
                </div>
              </div>
              <span class="progressLbl">Total Open Jobs</span>
              <div class="progress progressStyle progressColor8">
                <div class="progress-bar" role="progressbar" style="width: 85%" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100"></div>
              </div>
            </div>
          </div>
          <div class="col">
            <div class="dbCardStyle">
              <div class="row g-2">
                <div class="col">
                  <span class="dbCount">7</span>
                </div>
                <div class="col-auto">
                  <span class="dbCardIcon"><img src="{{asset('frontend/images/db-icon-9.png')}}" alt="..."></span>
                </div>
              </div>
              <span class="progressLbl">Total Closed Jobs</span>
              <div class="progress progressStyle progressColor9">
                <div class="progress-bar" role="progressbar" style="width: 70%" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100"></div>
              </div>
            </div>
          </div>
          <div class="col">
            <div class="dbCardStyle">
              <div class="row g-2">
                <div class="col">
                  <span class="dbCount">13</span>
                </div>
                <div class="col-auto">
                  <span class="dbCardIcon"><img src="{{asset('frontend/images/db-icon-10.png')}}" alt="..."></span>
                </div>
              </div>
              <span class="progressLbl">Latest Open Jobs</span>
              <div class="progress progressStyle progressColor10">
                <div class="progress-bar" role="progressbar" style="width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
              </div>
            </div>
          </div>
          <div class="col">
            <div class="dbCardStyle">
              <div class="row g-2">
                <div class="col">
                  <span class="dbCount">6</span>
                </div>
                <div class="col-auto">
                  <span class="dbCardIcon"><img src="{{asset('frontend/images/db-icon-11.png')}}" alt="..."></span>
                </div>
              </div>
              <span class="progressLbl">Latest Closed Jobs</span>
              <div class="progress progressStyle progressColor11">
                <div class="progress-bar" role="progressbar" style="width: 80%" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
              </div>
            </div>
          </div>
          <div class="col">
            <div class="dbCardStyle">
              <div class="row g-2">
                <div class="col">
                  <span class="dbCount">13</span>
                </div>
                <div class="col-auto">
                  <span class="dbCardIcon"><img src="{{asset('frontend/images/db-icon-12.png')}}" alt="..."></span>
                </div>
              </div>
              <span class="progressLbl">Report Violation Jobs</span>
              <div class="progress progressStyle progressColor12">
                <div class="progress-bar" role="progressbar" style="width: 60%" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100"></div>
              </div>
            </div>
          </div>
          <div class="col">
            <div class="dbCardStyle">
              <div class="row g-2">
                <div class="col">
                  <span class="dbCount">12</span>
                </div>
                <div class="col-auto">
                  <span class="dbCardIcon"><img src="{{asset('frontend/images/db-icon-13.png')}}" alt="..."></span>
                </div>
              </div>
              <span class="progressLbl">Withdrawal Request View</span>
              <div class="progress progressStyle progressColor13">
                <div class="progress-bar" role="progressbar" style="width: 90%" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100"></div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="backDrop"></div>
    </div>
    <div class="dbFooterCol">
      <p>© Copyright Domybidding  | All Rights Reserved.</p>
    </div>
  </section>
  @endsection