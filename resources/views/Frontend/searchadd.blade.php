@extends('frontend.home_master')
@section('title', 'Services' )
@section('home_content')
   <div class="headerHeight"></div>
    <section>
      <div class="breadcrumbCol">
        <div class="container position-relative">
          <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="{{url('/')}}">Home</a></li>
              <li class="breadcrumb-item active" aria-current="page">UK</li>
            </ol>
          </nav>
        </div>
      </div>
    </section>
    <section>
      <div class="proSearchCol mb-3">
        <div class="container">
          <div class="formInnerCol">
            <form action="">
              <div class="row g-1 g-lg-2">
                <div class="col-sm-4 col-xl-4">
                  <input type="text" class="form-control" placeholder="keywords">
                </div>
                <div class="col-sm-4 col-xl-4">
                  <input type="text" class="form-control" placeholder="Home">
                </div>
                <div class="col-sm-4 col-xl-4">
                  <input type="text" class="form-control" placeholder="All UK">
                </div>
                <div class="col-sm-4 col-xl-4">
                  <h5 class="formLbl mb-1">Price</h5>
                  <select class="form-select">
                    <option selected>Min</option>
                    <option value="1">Other option</option>
                  </select>
                </div>
                <div class="col-sm-4 col-xl-4 align-self-end">
                  <select class="form-select">
                    <option selected>Max</option>
                    <option value="1">Other option</option>
                  </select>
                </div>
                <div class="col-sm-4 col-xl-4 align-self-end">
                  <div class="form-check">
                    <input type="checkbox" class="form-check-input" id="exampleCheck1">
                    <label class="form-check-label" for="exampleCheck1">Ads with pics</label>
                  </div>
                </div>
                <div class="col-sm-4 col-xl-4">
                  <button class="btn btnPrimary w-100">Search</button>
                </div>
              </div>
            </form>

          </div>
        </div>
      </div>
    </section>
    <section>
      <div class="resultCol pageContent pt-0">
        <div class="container">
          <div class="propertyTopRow">
            <div class="row gy-3 gy-xl-0 align-items-center">
              <div class="col-xl-auto order-xl-last">
                <div class="filterRightCol">
                  <div class="row g-2">
                    <div class="col-sm">
                      <div class="gridListCol">
                        <ul>
                          <li><a href="javascript:void(0)" class="active"><span class="glIcon"><img src="{{asset('frontend/images/list-icon.png')}}" alt="..."></span> <span class="glText">Classifieds</span></a></li>
                          <li><a href="javascript:void(0)"><span class="glIcon"><img src="{{asset('frontend/images/grid-icon.png')}}" alt="..."></span> <span class="glText">Gallery</span></a></li>
                        </ul>
                      </div>
                    </div>
                    <div class="col-sm-auto">
                      <div class="sortFld">
                        <select class="form-select">
                          <option selected>Sort by:</option>
                          <option value="1">Option 1</option>
                          <option value="1">Option 2</option>
                        </select>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-xl">
                <div class="row g-0">
                  <div class="col-auto">
                    <span class="resultTitle">452 results in Buy and Sell for Home UK</span>
                  </div>
                  <div class="col">
                    <div class="resultOptions d-none d-lg-block">
                      <ul>
                        <li><a href="javascript:void(0)">Individual (275)</a></li>
                        <li><a href="javascript:void(0)">Professional (177)</a></li>
                      </ul>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="propResultCol">
           {{-- post  --}} 
            @foreach($get_search as $key => $values)
            <div class="listColMain">
              <a href="{{route('frontend.add.page',$values->id )}}" class="blankLink"></a>
              <div class="row g-3">
                <div class="col-sm-auto">
                  <div class="listImgCol">
                    <img src="{{asset($values->main_image)}}" alt="..." class="listImg">
                
                    <span class="pNumberCol"> {{count($values->post_images )}}</span>
                
                  </div>
                </div>
                <div class="col-sm">
                  <div class="propertyContentCol">
                    <div class="propContentTopCol">
                      <h4>{{	$values->post_title}}</h4>
                      <p>{{	$values->you_are}} <span>|| Posted at:  {{Carbon\Carbon::parse(	$values->create_date)->diffForHumans()}}</span></p>
                      <span class="propPriceCol">${{	number_format($values->expected_price)}}</span>
                      <p class="lineClamp2">
                      
                      {{Str::limit(	$values->post_detail,250,$end='....')}}
                      </p>
                      
                    </div>
                    <div class="propLocationCol lineClamp1">
                      {{	$values->postcode}}
                      
                    </div>
                  </div>
                </div>
              </div>
            </div>
            @endforeach
            {{-- post  --}}
            <div class="crateAlertCol">
              <p>Receive email notifications for new ads matching your search criteria ..</p>
              <a href="javascript:void(0)" class="btn btnSecondary">Create an alert</a>
            </div>
            <div class="paginationCol">
              <nav aria-label="Page navigation example">
                <ul class="pagination justify-content-center">
                    {{-- {{ $items->links() }} --}}
                </ul>
              </nav>
            </div>
            <div class="borderCol">
              <div class="tagsCol">
                <h3>Categories</h3>
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
            <div class="borderCol">
              <div class="tagsCol">
                <ul>
                  <li>
                    <a href="javascript:void(0)">North east</a>
                  </li>
                  <li>
                    <a href="javascript:void(0)">London</a>
                  </li>
                  <li>
                    <a href="javascript:void(0)">North east</a>
                  </li>
                  <li>
                    <a href="javascript:void(0)">London</a>
                  </li>
                </ul>
              </div>
              <div class="moreLocationCol">
                <a href="javascript:void(0)">More locations</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

@endsection


