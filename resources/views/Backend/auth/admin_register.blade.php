@extends('frontend.home_master')
@section('title', 'Home' )
@section('home_content')
<div class="headerHeight"></div>
    <section>
      <div class="breadcrumbCol">
        <div class="container position-relative">
          <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="{{route('home.page')}}">Home</a></li>
              <li class="breadcrumb-item active" aria-current="page">Register</li>
            </ol>
          </nav>
        </div>
      </div>
    </section>
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
                    <h4 class="modalTitle pb-3">SignUp</h4>
                    <!-- -----------------------------------------------------------  -->
                
                    <form action="{{route('admin.user_create')}}" method="post">
                        @csrf

                      <div class="row gx-0 gy-3">
                        
                    <!-- ================== -->
                    <div class="col-12">
                          <div class="iconFldCol2">
                
                            <input id="name" type="text" name="name"  class="form-control" :value="old('email')" placeholder="Full Name" required autofocus>
                        

                          </div>
                        </div>
                        <div class="col-12">
                          <div class="iconFldCol2">
                          <label for="email" class="fldIcon2"><img src="{{asset('frontend/images/email-icon.png')}}" alt="..."></label>
                            <input type="email" class="form-control" name="email" id="email"  autocomplete="email" placeholder="Email Address" required>
                          </div>
                        </div>
                    <!-- =================== -->
                        <div class="col-12">
                          <div class="iconFldCol2">
                          <label for="password" class="fldIcon2"><img src="{{asset('frontend/images/lock-icon.png')}}" alt="..."></label>
                                <input  type="password" class="form-control" name="password" required autocomplete="new-password" placeholder="Password">
                          </div>
                        </div>
                        <!-- =================== -->
                        <div class="col-12">
                          <div class="iconFldCol2">
                          <label for="password" class="fldIcon2"><img src="{{asset('frontend/images/lock-icon.png')}}" alt="..."></label>
                          <input  type="password" class="form-control" name="password_confirmation" required autocomplete="new-password" placeholder="Confirm Password">
                          </div>
                        </div>
                        <div class="col-12">
                          <button class="btn gradientBtn w-100">Signup</button>
                        </div>
                      </div>
                    </form>


                    <!-- old form  -->


                    <!-- old form  -->

                    <!-- -----------------------------------------------------------------  -->
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
                    <div class="resendActivationCol">
                      <a href="javascript:void(0)" class="forgotLink">Forgot my password</a>
                      <!-- <h5 class="pb-2">Resend activation link</h5>
                      <form action="" class="formStyle">
                        <div class="row gx-0 gy-3">
                          <div class="col-12">
                            <div class="iconFldCol2">
                              <label for="email-001" class="fldIcon2"><img src="images/email-icon.png" alt="..."></label>
                              <input type="text" id="email-001" class="form-control" required>
                            </div>
                          </div>
                          <div class="col-12">
                            <button class="btn gradientBtn w-100">Submit</button>
                          </div>
                        </div>
                      </form> -->
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    @endsection