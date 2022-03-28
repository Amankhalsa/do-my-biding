@extends('backend.admin_master')
@section('title', 'Admin Dashboard')
@section('admin_section')

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
                  @php
                  $total_member =DB::table('users')->get();
                  @endphp
                  <span class="dbCount">{{ count( $total_member)}}</span>
                </div>
                <div class="col-auto">
                  <span class="dbCardIcon"><img src="{{asset('frontend/images/db-icon-1.png')}}" alt="..."></span>
                </div>
              </div>
              <span class="progressLbl">Total Members</span>
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
              <span class="progressLbl">Total Requesters</span>
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
              <span class="progressLbl">Total Suppliers</span>
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
              <span class="progressLbl">Requests Today</span>
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
              <span class="progressLbl">Requests This Week</span>
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
              <span class="progressLbl">Requests This Month</span>
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
              <span class="progressLbl">Requests This Year</span>
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
              <span class="progressLbl">Open Requests</span>
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
              <span class="progressLbl">Closed Requests</span>
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
              <span class="progressLbl">Violations Report</span>
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
              <span class="progressLbl">Withdrawal Request Report</span>
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

  @endsection