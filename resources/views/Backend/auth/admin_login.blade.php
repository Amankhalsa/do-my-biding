@extends('frontend.home_master')
@section('title', 'Admin' )
@section('home_content')
<div class="headerHeight"></div>
    <section>
      <div class="breadcrumbCol">
        <div class="container position-relative">
          <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="{{route('home.page')}}">Home</a></li>
              <li class="breadcrumb-item active" aria-current="page">Login</li>
            </ol>
          </nav>
        </div>
      </div>
    </section>
    <!-- ========================== login  breadcrumbCol end ================= -->
    <!-- start login sectin  -->
<section>
      <div class="pageContent">
        <div class="container">
          <div class="loginContent">
            <div class="row g-0">
              <div class="col-lg align-self-center">
                <div class="loginGraphicCol">
                  <img src="{{asset('frontend/images/login-graphic.jpg')}}" alt="..">
                </div>
              </div>
              <div class="col-lg-auto">
                <div class="loginColMain">
                  <div class="loginCol">
                    <h4 class="modalTitle pb-3">Login</h4>
                    @if(Session::has('error'))
<div class="alert alert-warning alert-dismissible fade show" role="alert">
  <strong>{{Session::get('error')}}</strong>.
  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>
@endif
            
                            <form action="{{route('admin.login')}}"  class="formStyle" method="post">
                                @csrf
                      <div class="row gx-0 gy-3">
                 
                        <div class="col-12">
                          <div class="iconFldCol2">
                            <label for="email" class="fldIcon2"><img src="{{asset('frontend/images/email-icon.png')}}" alt="..."></label>
                            <input id="email" type="email" name="email"  class="form-control" :value="old('email')" required autofocus>
                          </div>
                        </div>
                        <div class="col-12">
                          <div class="iconFldCol2">
                            <label for="password" class="fldIcon2"><img src="{{asset('frontend/images/lock-icon.png')}}" alt="..."></label>
                            <input id="password"   type="password"  name="password" autocomplete="current-password"class="form-control" required>
                          </div>
                        </div>
                        <div class="col-12">
                          <div class="row g-0">
                            <div class="col">
                              <div class="form-check">
                                <input type="checkbox" class="form-check-input"   name="remember" id="remember">
                                <label class="form-check-label" for="remember_me">Remember me</label>
                              </div>
                            </div>
                            <div class="col-auto">
                          
                              <a href="#" class="forgotLink">Forgot password</a>
                             
                            </div>
                          </div>
                        </div>
                        <div class="col-12">
                          <button class="btn gradientBtn w-100">Log in</button>
                        </div>
                      </div>
                    </form>
                    <div class="orLink">
                      <span>Or</span>
                    </div>
                    <div class="row gx-0 gy-3">
                      <div class="col-12">
                        <div class="fbLoginBtn">
                          <a href="javascript:void(0)"><img src="{{asset('frontend/images/fb-login-btn.png')}}" alt="..."></a>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- end login section  -->

@endsection