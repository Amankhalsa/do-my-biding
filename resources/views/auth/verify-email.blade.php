@extends('frontend.home_master')
@section('title', 'Verify-email' )
@section('home_content')

<!-- section 1 -->
<section>
      <div class="bannerColMain">
        <div class="container position-relative">
          <div class="bannerContent">
            <div class="mb-4 text-sm text-gray-600">
                {{ __('Thanks for signing up! Before getting started, could you verify your email address by clicking on the link we just emailed to you? If you didn\'t receive the email, we will gladly send you another.') }}
            </div>
        @if (session('status') == 'verification-link-sent')
            <div class="mb-4 font-medium text-sm text-green-600">
                <h2>  {{ __('A new verification link has been sent to the email address you provided during registration.') }} </h2>
            </div>
        @endif
          @error('email')
          <h2 class="text-white"> {{$message}}</h2>
          @enderror
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
                    <h4 class="modalTitle-- pb-3">Verify your email address:</h4>
                <form method="POST" action="{{ route('verification.send') }}">
                @csrf
                      <div class="row gx-0 gy-3">
                        <div class="col-md-12">
                          <div class="iconFldCol2">             
                        </div>
                        </div>
                        <div class="col-12">
                          <button class="btn gradientBtn w-100">RESEND VERIFICATION EMAIL</button>
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