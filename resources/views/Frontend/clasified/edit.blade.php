
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
            <form class="formStyle2" action="{{route('update.clasified.add', $posted_add->id)}}" method="post" enctype="multipart/form-data">
                @csrf
                <input type="hiddwn" name="old_image" value="{{$posted_add->main_image}}">
                <div class="postCardMain">
                    <div class="postHeader">
                        <h4>Post your free ad</h4>
                    </div>
                    <div class="postBody">
                        <div class="row g-3">
                            <div class="col-12">
                                <div class="row">
                    {{-- ========== Category select ========= --}}
                    <div class="col-lg-6">
                    <label for="categoryFld" class="form-label">Category</label>
                    <select id="posting_category_select"  name="category_id"  class="form-select">

                            <option class="title" disabled="disabled" 
                            selected="selected">Our Categories</option>
                            @foreach($catdata as $catvalue)
                            <option value="{{$catvalue->id}}"   selected >{{$catvalue->category_name}}</option>
                            @endforeach
                    </select>
                        @error('category_id')
                        <span class="text-danger">{{$message}}</span>
                        @enderror

                    </div>
{{-- ========== Category select ========= --}}
{{-- ========== sub Category select ========= --}}
    <div class="col-lg-6">
        <label for="categoryFld" class="form-label">Sub Category</label>
        <select name="sub_category_id" class="form-select">
            <option class="title" disabled="disabled" selected="selected">Our Sub Categories</option>
      @foreach($sub_catdata as $values)
            <option value="{{$values->id}}" selected>{{$values->subcategory_name}}</option>
            @endforeach
        </select>
        @error('sub_category_id')
        <span class="text-danger"> {{$message}}</span>
        @enderror
    </div>
{{-- ========== sub Category select ========= --}}

    <div class="col-lg-6">
        <label for="categoryFld" class="form-label">Sub Sub Category</label>
        <select name="subsubcategory_id" class="form-select">
            <option class="title" disabled="disabled" selected="selected">Our Sub Sub Categories</option>
            @foreach($sub_subcatdata as $subsubvalue)
            <option value="{{$subsubvalue->id}}" selected>{{$subsubvalue->sub_subcategory_name}}</option>
            @endforeach
        </select>
        @error('subsubcategory_id')
        <span class="text-danger"> {{$message}}</span>
        @enderror

    </div>
 
                </div>
    </div>
    <div class="col-lg-6">
        <label for="postcodeFld" class="form-label">Postcode</label>
        <input type="text" id="postcodeFld" name="postcode" value="{{$posted_add->postcode}}" class="form-control">
                @error('postcode')
                <span class="text-danger"> {{$message}}</span>
                @enderror
    </div>
    <div class="col-lg-6">
        <label for="adTitle" class="form-label">Title of your ad</label>
        <input type="text" id="adTitle" name="post_title" value="{{$posted_add->post_title}}" class="form-control">
                @error('post_title')
                <span class="text-danger"> {{$message}}</span>
                @enderror
    </div>
    <div class="col-12">
        <label for="descriptionFld" class="form-label">Description</label>
        <textarea id="descriptionFld" name="post_detail" class="form-control" rows="3">{{$posted_add->post_detail}}
            </textarea>
            @error('post_detail')
            <span class="text-danger"> {{$message}}</span>
            @enderror
    </div>

            <div class="col-lg-6">
                <label for="salaryFld" class="form-label">Price</label>
                <div class="input-group mb-3">
                    <span class="input-group-text" id="basic-addon1">£</span>
                    <input type="text" class="form-control" name="expected_price" value="{{$posted_add->expected_price}}" placeholder="">
                  
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
                        <span><img src="{{asset('frontend/images/upload-icon.svg')}}" alt="..."></span>
                        <p>Upload image</p>
                        <input type="file" data-max_length="20" name="main_image"
                            class="upload__inputfile"
                            onchange="document.getElementById('output').src = window.URL.createObjectURL(this.files[0])">
                    </label>
                </div>
{{-- <div class="upload__img-wrap"></div> --}}
                <img id="output" src="{{asset($posted_add->main_image)}}" width="100" height="100">
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
                                        <span><img src="{{asset('frontend/images/upload-icon.svg')}}" alt="..."></span>
                                        <p>Upload images</p>
                                        <input type="file" multiple="" data-max_length="20" name="photo_name[]"
                                            class="upload__inputfile">
                                    </label>
                                </div>
                                <span>Old images</span>
                                <div class="upload__img-wrap">
                                    
                                    @foreach($multi_img as $imgs)
                                    <img src="{{asset($imgs->photo_name)}}" alt="" width="100">&nbsp;
                                @endforeach
                                </div>
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
                                <input type="text" id="adTitle" name="phone" value="{{$posted_add->phone}}" class="form-control">

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
            <label class="form-check-label" for="termLbl">I agree to DoMyBidding’s 
                <a href="javascript:void(0)" target="_blank">Terms and Conditions , </a>
                <a href="javascript:void(0)" target="_blank"> Posting Guidelines</a> and accept the
                <a href="javascript:void(0)" target="_blank">Privacy Policy.</a>
            </label>
                
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



@endsection
