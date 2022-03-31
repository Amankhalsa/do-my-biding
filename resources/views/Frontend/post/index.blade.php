@extends('frontend.home_master')
@section('title', 'Add post' )
@section('home_content')

<!-- section 1 -->
  <div class="headerHeight"></div>
  <section>
    <div class="breadcrumbCol">
      <div class="container position-relative">
        <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
          <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{url('/')}}">Home</a></li>
            <li class="breadcrumb-item"><a href="javascript:void(0)">UK</a></li>
            <li class="breadcrumb-item"><a href="javascript:void(0)">Lorem</a></li>
            <li class="breadcrumb-item active" aria-current="page">Lorem</li>
          </ol>
        </nav>
      </div>
    </div>
  </section>

  <section>
    <div class="adsColMain pageContent pt-0">
      <div class="container">
        <div class="adsCol">
          <div class="row g-3 g-xl-4">
            <div class="col-lg-8">
              <div class="adsLeftcol">
                <div class="borderCol mt-0">
                  <div class="sliderTpCnt">
<!-- ======= Content area ========== -->
                    <form class="pt-5" method="post" action="{{route('store.front.post')}}">
                      @csrf
                    <h1>Comming soon</h1>
                      <div class="form-group form-check">
                        <input type="checkbox" class="form-check-input" value="1"    name="numer" />
                        <label class="form-check-label" for="Active">Active / Inactive post </label>
                      </div>
                      <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
<!-- ======= Content area ========== -->
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