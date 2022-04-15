
@extends('frontend.home_master')
@section('title', 'Home' )
@section('home_content')


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
                  <h5>{{$get_post_data->post_title}}</h5>
                  <div class="text1">
                    <span class="lblCol">Posted by :</span>
                    <span class="lblCol">{{	$get_post_data['userdetail']['name']}} || Posted at :  {{Carbon\Carbon::parse(	$get_post_data->create_date)->diffForHumans()}}</span>
                  </div>
                  <div class="text1">	
                    <span class="lblCol">You are :</span>
                    <span class="lblCol">{{	$get_post_data->you_are}}</span>
                  </div>
                  <div class="amntCol">
                    <span class="primaryColor semiBold">${{	$get_post_data->expected_price}}</span>
                  </div>
                </div>
                <div class="swiper adsSlider swiperStyle">
                  <div class="swiper-wrapper">
               @foreach($get_data_multi_img as $value)     
                    <div class="swiper-slide">
                      <div class="sliderImgCol">
                        <img src="{{asset($value->photo_name)}}" />
                      </div>
                    </div>
                @endforeach
                  </div>
                  <div class="swiper-button-next"></div>
                  <div class="swiper-button-prev"></div>
                </div>
                <div thumbsSlider="" class="swiper adsThmbSlider">
                  <div class="swiper-wrapper">
                    {{-- <div class="swiper-slide">
                      <div class="sliderThumbImg">
                        <img src="{{asset($get_post_data->main_image)}}" />
                      </div>
                    </div> --}}
                    @foreach($get_data_multi_img as $value) 
                    <div class="swiper-slide">
                      <div class="sliderThumbImg">
                        <img src="{{asset($value->photo_name)}}" />
                      </div>
                    </div>
                    @endforeach
                  </div>
                </div>
              </div>
              <div class="borderCol">
                <div class="projectCol">
                  <div class="row">
                    <div class="col-3">
                      <div class="labelCol">
                        Price
                      </div>
                    </div>
                    <div class="col-9">
                      <div class="labelCnt">
                        <span class="semiBold">${{	number_format($get_post_data->expected_price)}}</span>
                      </div>
                    </div>
                  </div>
                  <div class="row mt-1">
                    <div class="col-3">
                      <div class="labelCol">
                        Postcode
                      </div>
                    </div>
                    <div class="col-9">
                      <div class="labelCnt fxWidth">
                        <span>{{	$get_post_data->postcode}}</span>
                      </div>
                    </div>
                  </div>
                  <div class="row mt-1">
                    <div class="col-3">
                      <div class="labelCol">
                        Type of ad
                      </div>
                    </div>
                    <div class="col-9">
                      <div class="labelCnt">
                        <span>{{	$get_post_data->you_are}} Offer </span>
                      </div>
                    </div>
                  </div>
                  <div class="row mt-1">
                    <div class="col-3">
                      <div class="labelCol">
                        Description
                      </div>
                    </div>
                    <div class="col-9">
                      <div class="labelCnt">
                        <span>{{$get_post_data->post_detail}}</span>
                      </div>
                    </div>
                  </div>
                  <div class="row mt-5">
                    <div class="col-md-8 col-lg-7">
                      <div class="row">
                        <div class="col-4">
                          <div class="detailCol">
                            <span class="fwBold">Ad ID</span>
                            <span>{{	$get_post_data->add_id}}	</span>
                          </div>
                        </div>
                        <div class="col-8">
                          <div class="detailCol">
                            <span class="fwBold">Member since</span>
                       
                            <span>{{Carbon\Carbon::parse(	$get_post_data['userdetail']['created_at'])->diffForHumans()}}</span>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="col-md-4 col-lg-5">
                      <div class="detailCol">
                        <span class="fwBold">visitors</span>
                        <span>12</span>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="borderCol">
                <div class="adReportColMain">
                  <div class="row g-3 align-items-center">
                    <div class="col-lg-auto">
                      <div class="adReportLeft">
                        <h3>Anything worng with this ad?</h3>
                        <p class="mb-0">
                          Let us know what the problem is, we will review it accordingly.</p>
                      </div>
                    </div>
                    <div class="col-lg text-end">
                      @auth
                      <div class="adReportRight">
                        <a href="{{route('frontend.report_on.post',$get_post_data->add_id)}}">
                        <button type="button" class="btn btnOutline" name="button">
                          <span class="pe-3"> <img src="{{asset('frontend/images/flag.png')}}" alt=""> </span>
                          <span>Report this add copy</span>
                        </button>
                        </a>
                      </div>
                      @endauth
                    </div>
                  </div>
                </div>
              </div>
              <div class="backResultmain">
                <div class="row align-item-end">
                  <div class="col">
                    <h3 class="mb-0">Didn't find what you were looking for?</h3>
                  </div>
                  <div class="col-auto">
                    <a href="{{route('serives.page')}}" class="btn btnLink m-0 p-0 primaryColor">< Back to results</a>
                  </div>
                </div>
              </div>
              <div class="borderCol">
                <div class="tagsCol">
                  <h3>Tags</h3>
                  <ul>
                    <li>
                      <a href="javascript:void(0)">Household goods</a>
                    </li>
                    <li>
                      <a href="javascript:void(0)">Furniture</a>
                    </li>
                    <li>
                      <a href="javascript:void(0)">Household goods</a>
                    </li>
                    <li>
                      <a href="javascript:void(0)">Household goods</a>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-4">
            <div class="adsRightCol">
              <div class="cardStyle3">
                <h5>Contact the advertiser</h5>
                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                <button type="button" class="btn btnPrimary" name="button">
                  <span> <img src="{{asset('frontend/images/email.png')}}" alt=""> </span>
                  <span>Send a message</span>
                </button>
              </div>
              <div class="cardStyle3">
                <h5>Do My Bidding Safety Centre</h5>
                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                <a href="{{route('frontend.report_on.post',$get_post_data->add_id)}}" >
                <button type="button" class="btn btnOutline" name="button">
                  <span class="pe-3"> <img src="{{asset('frontend/images/flag.png')}}" alt=""> </span>
                  <span>Report this add copy</span>
                </button>
              </a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
{{-- add paage swiper  --}}

@endsection