@php
$getcat = DB::table('categories')->get();
$getlocation = DB::table('locations')->orderBy('name')->get();
$front_banner = DB::table('front_banners')->first();
$get_logo = DB::table('sitelogos')->first();
@endphp
@extends('frontend.home_master')
@section('title', 'Add post' )
@section('home_content')
{{-- ajax for append sub category  --}}
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
{{-- ajax for append sub category  --}}

<div class="headerHeight"></div>
<section>
    <div class="postAdCol">
        <div class="container">
            <form class="formStyle2" action="{{route('store.front.post')}}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="postCardMain">
                    <div class="postHeader">
                        <h4>Post your free ad</h4>
                    </div>
                    <div class="postBody">
                        <div class="row g-3">
                            <div class="col-12">
                                <div class="row">
                                    <div class="col-lg-6">
                                        <label for="categoryFld" class="form-label">Category</label>
    <select id="posting_category_select"  name="category_id"  class="form-select">
        {{-- ========== Category select ========= --}}
        <option class="title" disabled="disabled" 
            selected="selected">Our Categories</option>
        @foreach($getcat as $catvalue)
        <option value="{{$catvalue->id}}">{{$catvalue->category_name}}</option>
        @endforeach
    </select>
        @error('category_id')
        <span class="text-danger"> {{$message}}</span>
        @enderror
    {{-- ========== Category select ========= --}}
</div>
                                    {{-- ======================= --}}
    <div class="col-lg-6">
        <label for="categoryFld" class="form-label">Sub Category</label>
        <select name="sub_category_id" class="form-select">
            {{-- ========== sub Category select ========= --}}
            <option class="title" disabled="disabled" selected="selected">Our Sub Categories</option>

        </select>
        @error('sub_category_id')
        <span class="text-danger"> {{$message}}</span>
        @enderror
        {{-- ========== sub Category select ========= --}}
    </div>


    <div class="col-lg-6">
        <label for="categoryFld" class="form-label">Sub Sub Category</label>
        <select name="subsubcategory_id" class="form-select">
            {{-- ========== sub Category select ========= --}}
            <option class="title" disabled="disabled" selected="selected">Our Sub Sub Categories</option>
        </select>
        @error('subsubcategory_id')
        <span class="text-danger"> {{$message}}</span>
        @enderror
        {{-- ========== sub Category select ========= --}}
    </div>
    {{-- col-12 --}}
    {{-- <div class="col-12">
    <div class="catOptionCol">
    <div class="form-check form-check-inline">
    <input class="form-check-input" type="radio" name="subsubcategory_id" id="inlineRadio1" value="">
    <label class="form-check-label" for="inlineRadio1">Car Parts & Spares</label>
    </div>
    </div>
    </div> --}}
    {{-- col-12 --}}
                </div>
    </div>
    <div class="col-lg-6">
        <label for="postcodeFld" class="form-label">Postcode</label>
        <input type="text" id="postcodeFld" name="postcode" class="form-control">
                @error('postcode')
                <span class="text-danger"> {{$message}}</span>
                @enderror
    </div>
    <div class="col-lg-6">
        <label for="adTitle" class="form-label">Title of your ad</label>
        <input type="text" id="adTitle" name="post_title" class="form-control">
                @error('post_title')
                <span class="text-danger"> {{$message}}</span>
                @enderror
    </div>
    <div class="col-12">
        <label for="descriptionFld" class="form-label">Description</label>
        <textarea id="descriptionFld" name="post_detail" class="form-control" rows="3">
            </textarea>
            @error('post_detail')
            <span class="text-danger"> {{$message}}</span>
            @enderror
    </div>
                            {{-- <div class="col-12">
                <label for="positionFlds" class="form-label">You are</label>
                <div class="inlineCheck">
                  <div class="form-check form-check-inline">
                    <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1">
                    <label class="form-check-label" for="inlineCheckbox1">Photographer</label>
                  </div>
              
         
                </div>
              </div> --}}
            <div class="col-lg-6">
                <label for="salaryFld" class="form-label">Price</label>
                <div class="input-group mb-3">
                    <span class="input-group-text" id="basic-addon1">£</span>
                    <input type="text" class="form-control" name="expected_price" placeholder="">
                  
                </div>
                @error('expected_price')
                <span class="text-danger"> {{$message}}</span>
                @enderror
                            </div>
                        </div>
                    </div>
                    {{-- main image  --}}
        <div class="postHeader">
            <h4> Main photo</h4>
        </div>
        <div class="postBody">
        <div class="fileUploadCol">
            <div class="upload__box">
                <div class="upload__btn-box">
                    <label class="upload__btn">
                        <span><img src="{{('frontend/images/upload-icon.svg')}}" alt="..."></span>
                        <p>Upload image</p>
                        <input type="file" data-max_length="20" name="main_image"
                            class="upload__inputfile"
                            onchange="document.getElementById('output').src = window.URL.createObjectURL(this.files[0])">
                    </label>
                </div>
                {{-- <div class="upload__img-wrap"></div> --}}
                <img id="output" src="{{asset('upload/no_image.jpg')}}" width="100" height="100">
            </div>
            </div>
        </div>
                    @error('main_image')
                    <span class="text-danger"> {{$message}}</span>
                    @enderror






                    {{-- main image  --}}
                    <div class="postHeader">
                        <h4> Select Multiple photos</h4>
                        <p>
                            Important: Add a clear and accurate photo(s) to increase the number of responses you
                            receive. You may add up to 12 pictures. Max file size 4MB.</p>
                    </div>
                    <div class="postBody">
                        <div class="fileUploadCol">
                            <div class="upload__box">
                                <div class="upload__btn-box">
                                    <label class="upload__btn">
                                        <span><img src="{{('frontend/images/upload-icon.svg')}}" alt="..."></span>
                                        <p>Upload images</p>
                                        <input type="file" multiple="" data-max_length="20" name="photo_name[]"
                                            class="upload__inputfile">
                                    </label>
                                </div>
                                <div class="upload__img-wrap"></div>
                            </div>
                        </div>
                    </div>

                    <div class="postHeader">
                        <h4>Your personal info</h4>
                    </div>
                    <div class="postBody">
                        <div class="row g-3">
                            <div class="col-lg-6">
                                <label for="adTitle" class="form-label">Phone</label>
                                <input type="text" id="adTitle" name="phone" class="form-control">

                                @error('phone')
                                <span class="text-danger"> {{$message}}</span>
                                @enderror
                                <div class="form-text">This will be displayed on your ad</div>

                            </div>
                        </div>
                    </div>
                    <div class="postHeader">
                        <h4>Publish your ad </h4>
                    </div>
                    <div class="postBody">
                        <div class="checkCol">
                            <div class="mb-3 form-check">
        <input type="checkbox" class="form-check-input" id="termLbl" name="agree" value="1">
            <label class="form-check-label" for="termLbl">I agree to DoMyBidding’s <a
                    href="javascript:void(0)" target="_blank">Terms and Conditions</a>, <a
                    href="javascript:void(0)" target="_blank"> Posting Guidelines</a> and accept the
                <a href="javascript:void(0)" target="_blank">Privacy Policy</a>.</label>
                
        </div>
        @error('agree')
        <span class="text-danger"> {{$message}}</span>
        @enderror
                        </div>
                     
                        <button class="btn btnSecondary">Publish your ad</button>
                    </div>
                </div>
            </form>

        </div>
    </div>


</section>
<script type="text/javascript">
    $(document).ready(function () {
        $('select[name="category_id"]').on('change', function () {
            var category_id = $(this).val();
            // console.log(category_id);
            if (category_id) {
                $.ajax({
                    url: "{{  url('/ajax') }}/" + category_id,
                    type: "GET",
                    dataType: "json",
                    success: function (data) {
                        
                    
                        $('select[name="subsubcategory_id"]').html('')
                        var d = $('select[name="sub_category_id"]').empty();
                        $.each(data, function (key, value) {
                            $('select[name="sub_category_id"]').append(
                                '<option value="' + value.id + '">' + value.subcategory_name + '</option>');
                        });
                    },
                });
            } else {
                alert('danger');
            }
        });
        // ik or help 
    // ======================= ========================  
        $('select[name="sub_category_id"]').on('change', function(){
            var subcategory_id = $(this).val();
            if(subcategory_id) {
            	console.log(subcategory_id);
                $.ajax({
                    url: "{{  url('/sub-subcat/ajax') }}/"+subcategory_id,
                    type:"GET",
                    dataType:"json",
                    success:function(data) {
                        var d = $('select[name="subsubcategory_id"]').empty();
                          $.each(data, function(key, value){
                              $('select[name="subsubcategory_id"]').append('</option><option value="'+ value.id +'">' + value.sub_subcategory_name + '</option>');
   
                          });
                    },
                });
            } else {
                alert('danger');
            }
        });
    // ======================= =========================  
    });

</script>
@endsection
