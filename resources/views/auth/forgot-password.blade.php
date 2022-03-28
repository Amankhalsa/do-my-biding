

@extends('frontend.home_master')
@section('title', 'Home' )
@section('home_content')

<!-- section 1 -->
<section>
      <div class="bannerColMain">
        <div class="container position-relative">
          <div class="bannerContent">

          <p>Forgot your password? No problem. Just let us know your email address and we will email you a password reset link that will allow you to choose a new one.</p>

          </div>
        </div>
      </div>
    </section>


            <!-- Email Address -->


<!-- section 1 -->
<section>
      <div class="pageContent">
        <div class="container">
          <div class="loginContent">
            <div class="row g-0">
           
              <div class="col-lg-auto">
                <div class="loginColMain" style="width:800px;">

                  <div class="loginCol">
                    <h4 class="modalTitle pb-3">Forgot password:</h4>
                    <form method="POST" action="{{ route('password.email') }}">
                                   @csrf
                      <div class="row gx-0 gy-3">
                 
                        <div class="col-md-12">
                          <div class="iconFldCol2">
                            <label for="email" class="fldIcon2"><img src="{{asset('frontend/images/email-icon.png')}}" alt="..."></label>
                            <input id="email" type="email" name="email"  class="form-control"  required autofocus placeholder="Enter Registerd email ">
                        </div>
                        </div>
              
                  
                        <div class="col-12">
                          <button class="btn gradientBtn w-100">Email Password Reset Link</button>
                        </div>
                      </div>
                    </form>
                  
                  
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