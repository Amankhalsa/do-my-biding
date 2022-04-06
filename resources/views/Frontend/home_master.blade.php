<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
{{-- swiper  --}}
<link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css"/>
{{-- swiper  --}}
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="{{asset('frontend/css/style.css')}}">
    <!-- single page css -->
   {{-- <link rel="stylesheet" href="{{asset('css/app.css')}}"> --}}

      <!-- Toaster CSS -->
  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.css" >
<style type="text/css">
.toast-success {
  background-color: #51A351 !important;
}
.toast-error {
  background-color: #BD362F !important;
}
.toast-info {
  background-color: #2F96B4 !important;
}
.toast-warning {
  background-color: #F89406 !important;
}
</style>
    <title>@yield('title') - Do my Bidding</title>
  </head>
  <body>

 <!-- ------------------------  -->
 @include('frontend.body.header')
 <!-- -------------------------- -->
<!-- ======================content area ============================ -->
@yield('home_content')
<!-- ======================content area ============================ -->
      <footer>
        <div class="footerCol">
          <div class="footerTopCol">
            <div class="container">
              <div class="row gy-4">
                <div class="col-xl">
                  <div class="row gy-4 g-2">
                    <div class="col-6 col-md-3">
                      <h4 class="footerTitle">Business Directory</h4>
                      <ul class="footerLinks">
                        <li><a href="javascript:void(0)">Company</a></li>
                        <li><a href="javascript:void(0)">Colleges</a></li>
                        <li><a href="javascript:void(0)">Hospital</a></li>
                        <li><a href="javascript:void(0)">Company</a></li>
                      </ul>
                    </div>
                    <div class="col-6 col-md-3">
                      <h4 class="footerTitle">Classifieds</h4>
                      <ul class="footerLinks">
                        <li><a href="javascript:void(0)">Real Estate</a></li>
                        <li><a href="javascript:void(0)">Computer</a></li>
                        <li><a href="javascript:void(0)">Clothing</a></li>
                        <li><a href="javascript:void(0)">Jobs</a></li>
                      </ul>
                    </div>
                    <div class="col-6 col-md-3">
                      <h4 class="footerTitle">Resources</h4>
                      <ul class="footerLinks">
                        <li><a href="javascript:void(0)">Support</a></li>
                        <li><a href="javascript:void(0)">FAQ</a></li>
                        <li><a href="javascript:void(0)">Terms of Service</a></li>
                        <li><a href="javascript:void(0)">Contact Details</a></li>
                      </ul>
                    </div>
                    <div class="col-6 col-md-3">
                      <h4 class="footerTitle">Popular Ads</h4>
                      <ul class="footerLinks">
                        <li><a href="javascript:void(0)">Educational college Ads</a></li>
                        <li><a href="javascript:void(0)">Lorem ipusum dummy text</a></li>
                        <li><a href="javascript:void(0)">Lorem ipusum dummy</a></li>
                        <li><a href="javascript:void(0)">Lorem ipusum dummy text</a></li>
                      </ul>
                    </div>
                  </div>
                </div>
                <div class="col-xl-auto">
                  <div class="subscribeCol">
                    <div class="row">
                      <div class="col-sm col-xl-12">
                        <h4 class="footerTitle">Subscribe</h4>
                        <form action="">
                          <div class="input-group">
                            <input type="email" class="form-control" id="emailFld" placeholder="Email" required>
                            <button class="input-group-text subscribeBtn">Subscribe</button>
                          </div>
                        </form>
                      </div>
                      <div class="col-sm-auto col-xl-12">
                        <div class="paymentOptions">
                          <h4 class="footerTitle">Payments</h4>
                          <div class="pOptions"><img src="{{asset('frontend/images/payment-option.png')}}" alt="..."></div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="footerBtmCol">
            <div class="container">
              <div class="row gy-2 align-items-center">
                <div class="col-sm-auto order-sm-last">
                  <ul class="socialLinks">
                    <li><a href="javascript:void(0)"><img src="{{asset('frontend/images/fb-icon.png')}}" alt="..."></a></li>
                    <li><a href="javascript:void(0)"><img src="{{asset('frontend/images/twitter-icon.png')}}" alt="..."></a></li>
                    <li><a href="javascript:void(0)"><img src="{{asset('frontend/images/linkedin-icon.png')}}" alt="..."></a></li>
                    <li><a href="javascript:void(0)"><img src="{{asset('frontend/images/pinterest-icon.png')}}" alt="..."></a></li>
                  </ul>
                </div>
                <div class="col-sm">
                  <div class="copyrightCol">
                    <p class="mb-0">©  <a href="https://www.vivastreet.co.uk/"> Domybidding</a> ALL Rights Reserved</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </footer>
    <div class="backDrop"></div>

<!-- Option 1: Bootstrap Bundle with Popper -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

<!-- single app js  -->
<script src="{{asset('js/app.js')}}"></script>
<!-- Toaster Javascript cdn -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>

<script>
 @if(Session::has('message'))
 var type = "{{ Session::get('alert-type','info') }}"
 switch(type){
    case 'info':
    toastr.info(" {{ Session::get('message') }} ");
    break;
    case 'success':
    toastr.success(" {{ Session::get('message') }} ");
    break;
    case 'warning':
    toastr.warning(" {{ Session::get('message') }} ");
    break;
    case 'error':
    toastr.error(" {{ Session::get('message') }} ");
    break; 
 }
 @endif 
</script>
<script src="{{asset('frontend/js/custom.js')}}"></script>
<script src="{{asset('frontend/js/fileupload.js')}}"></script>
{{-- swiper  --}}
<script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>

<script>
var swiper = new Swiper(".adsThmbSlider", {
  spaceBetween: 10,
  slidesPerView: 'auto',
  freeMode: true,
  watchSlidesProgress: true,
});
var swiper2 = new Swiper(".adsSlider", {
  spaceBetween: 10,
  navigation: {
    nextEl: ".swiper-button-next",
    prevEl: ".swiper-button-prev",
  },
  thumbs: {
    swiper: swiper,
  },
});
</script>
  </body>
</html>
