@extends('frontend.home_master')
@section('title', 'Home' )
@section('home_content')

<!-- section 1 -->
<section>
      <div class="bannerColMain">
        <div class="container position-relative">
          <div class="bannerContent">
            <h1 class="text-uppercase">Get sellers competing to offer  you a service or product</h1>
            <p>Lorem Ipsum is simply dummy text of the printing and typesettin</p>
          </div>
        </div>
      </div>
    </section>
<!-- section 1 end  -->
<!-- section2 start  -->
    <section>
      <div class="sectionSpaceLg pt-3">
        <div class="container">
          <div class="topSearchCol">
            <div class="searchCol">
              <div class="row align-items-center">
                <div class="col-md">
                  <div class="row">
                    <div class="col-md-4">
                      <div class="iconFldCol">
                        <label for="searchFld" class="iFldLbl"><img src="{{asset('frontend/images/search.svg')}}" alt="..."></label>
                        <input type="text" class="inputStyle" id="searchFld" placeholder="Search keyword...">
                      </div>
                    </div>
                    <div class="col-md-4 fldBorder">
                      <div class="iconFldCol">
                        <label for="searchFld2" class="iFldLbl"><img src="{{asset('frontend/images/map-pin.svg')}}" alt="..."></label>
                        <div class="selectCol">
                          <select class="form-select customFormSelect" aria-label="Default select example">
                            <option selected>Select Location</option>
                            <option value="1">Location1</option>
                            <option value="2">Location2</option>
                            <option value="3">Location3</option>
                          </select>
                        </div>
                      </div>
                    </div>
                    <div class="col-md-4 fldBorder">
                      <div class="iconFldCol">
                        <label for="searchFld3" class="iFldLbl"><img src="{{asset('frontend/images/grid.svg')}}" alt="..."></label>
                        <div class="selectCol">
                          <select class="form-select customFormSelect" aria-label="Default select example">
                            <option selected>Select Category</option>
                            <option value="1">Category1</option>
                            <option value="2">Category2</option>
                            <option value="3">Category3</option>
                          </select>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-md-auto">
                  <div class="btnCol">
                    <button class="btn btnStyle">
                      <span class="searchIconCol">
                        <img src="{{asset('frontend/images/search-icon.png')}}" alt="...">
                      </span>
                      <span>
                        search
                      </span>
                    </button>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="titleCol">
            <h5 class="subTitle">Categories</h5>
            <h3 class="lgTitle pt-2 pb-3">Explore by Category</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna </p>
          </div>
          <div class="row g-4">
            <div class="col-sm-6 col-xl-3">
              <div class="cardStyle1">
                <div class="cs1IconCol">
                  <img src="{{asset('frontend/images/do-bidding-icon.png')}}" alt="...">
                </div>
                <div class="cs1ContentCol">
                  <h4>Do My Bidding</h4>
                  <span class="cs1Counter">52</span>
                </div>
              </div>
            </div>
            <div class="col-sm-6 col-xl-3">
              <div class="cardStyle1">
                <div class="cs1IconCol">
                  <img src="{{asset('frontend/images/services-icon.png')}}" alt="...">
                </div>
                <div class="cs1ContentCol">
                  <h4>Services</h4>
                  <span class="cs1Counter">20</span>
                </div>
              </div>
            </div>
            <div class="col-sm-6 col-xl-3">
              <div class="cardStyle1">
                <div class="cs1IconCol">
                  <img src="{{asset('frontend/images/for-sale-icon.png')}}" alt="...">
                </div>
                <div class="cs1ContentCol">
                  <h4>For Sale</h4>
                  <span class="cs1Counter">32</span>
                </div>
              </div>
            </div>
            <div class="col-sm-6 col-xl-3">
              <div class="cardStyle1">
                <div class="cs1IconCol">
                  <img src="{{asset('frontend/images/competitions-icon.png')}}" alt="...">
                </div>
                <div class="cs1ContentCol">
                  <h4>Competitions</h4>
                  <span class="cs1Counter">15</span>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- section 2 end  -->
    <!-- section 3 start  -->

      <section>
        <div class="patternBg sectionSpace">
          <div class="container">
            <div class="accordion accordionStyle" id="supplierAccordion">
              <div class="accordion-item">
                <h2 class="accordion-header" id="headingOne">
                  <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                    <span>If you want to be a supplier</span>
                  </button>
                </h2>
                <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#supplierAccordion">
                  <div class="accordion-body">
                    <div class="spOptionsCol">
                      <div class="row g-4">
                        <div class="col-sm-6 col-xl-3">
                          <div class="cardStyle2">
                            <div class="cs2IconCol">
                              <img src="{{asset('frontend/images/place-bid-icon.png')}}" alt="...">
                            </div>
                            <div class="cs2ContentCol">
                              <h4>place bid</h4>
                              <p>Tell us about your project.Upwork Connects you with top freelancers  and agencies around the world, or near you</p>
                            </div>
                          </div>
                        </div>
                        <div class="col-sm-6 col-xl-3">
                          <div class="cardStyle2">
                            <div class="cs2IconCol">
                              <img src="{{asset('frontend/images/accept-icon.png')}}" alt="...">
                            </div>
                            <div class="cs2ContentCol">
                              <h4>accept job</h4>
                              <p>Tell us about your project.Upwork Connects you with top freelancers  and agencies around the world, or near you</p>
                            </div>
                          </div>
                        </div>
                        <div class="col-sm-6 col-xl-3">
                          <div class="cardStyle2">
                            <div class="cs2IconCol">
                              <img src="{{asset('frontend/images/complete-job-icon.png')}}" alt="...">
                            </div>
                            <div class="cs2ContentCol">
                              <h4>complete job</h4>
                              <p>Tell us about your project.Upwork Connects you with top freelancers  and agencies around the world, or near you</p>
                            </div>
                          </div>
                        </div>
                        <div class="col-sm-6 col-xl-3">
                          <div class="cardStyle2">
                            <div class="cs2IconCol">
                              <img src="{{asset('frontend/images/get-paid-icon.png')}}" alt="...">
                            </div>
                            <div class="cs2ContentCol">
                              <h4>get paid</h4>
                              <p>Tell us about your project.Upwork Connects you with top freelancers  and agencies around the world, or near you</p>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="accordion-item">
                <h2 class="accordion-header" id="headingTwo">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                    <span>If you want someone to do your bidding</span>
                  </button>
                </h2>
                <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#supplierAccordion">
                  <div class="accordion-body">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus ullamcorper accumsan cursus. Nulla tincidunt gravida sem, sed fringilla nisi viverra sed. Sed varius vitae dolor in scelerisque. Suspendisse quis dui scelerisque, dignissim purus a, fermentum enim. Donec scelerisque est eros, quis commodo leo gravida vel.
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
<!-- section 3 end  -->
<!-- section 4 start  -->
      <section>
        <div class="counterColMain">
          <div class="container">
            <div class="row g-4">
              <div class="col-4">
                <div class="counterCol">
                  <ul>
                    <li><img src="{{asset('frontend/images/users-icon.png')}}" alt="..." class="counterIcon"></li>
                    <li>
                      <span class="count">13</span>
                      <span class="countLbl">users</span>
                    </li>
                  </ul>
                </div>
              </div>
              <div class="col-4">
                <div class="counterCol">
                  <ul>
                    <li><img src="{{asset('frontend/images/requests-icon.png')}}" alt="..." class="counterIcon"></li>
                    <li>
                      <span class="count">1</span>
                      <span class="countLbl">Requests</span>
                    </li>
                  </ul>
                </div>
              </div>
              <div class="col-4">
              <div class="counterCol">
                <ul>
                  <li><img src="{{asset('frontend/images/bids-icon.png')}}" alt="..." class="counterIcon"></li>
                  <li>
                    <span class="count">0</span>
                    <span class="countLbl">Bids</span>
                  </li>
                </ul>
              </div>
            </div>
            </div>
          </div>
        </div>
      </section>
<!-- section 4 end  -->

@endsection