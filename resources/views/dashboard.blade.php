
@extends('frontend.home_master')
@section('title', 'Dashboard' )
@section('home_content')
<!-- section 1 -->
<header>
    <div class="headerCol">
        <div class="container">
            <div class="row mt-4">
                <div class="col">
                    <div class="navigation">
                        <ul>
                            <li>
                                <a href="#"><i class="fa-solid fa-house"></i>home</a>
                            </li>
                            <li class="active">
                                <a href="#"><i class="fa-solid fa-house"></i>My Details</a>
                            </li>
                            <li>
                                <a href="./ads.html"><i class="fa-solid fa-house"></i>My Ads </a>
                            </li>
                            <li>
                                <a href="./emailAlert.html"><i class="fa-solid fa-house"></i>My Email Alerts </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
{{-- <div class="headerHeight"></div> --}}
<section>
    <div class="postAdCol ">
        <div class="container">
            <div class="custom-banner-content">
                <p>Starting Tuesday, 8th March, you may be asked to confirm your details when paying by card on
                    domybiding. This is a new check
                    <a href="#">(3D Secure 2)</a> from banks to ensure your payments are as secure as possible, being
                    adopted by all companies.</p>
                <p class="mt-3">If you have any questions, call our Customer Service team on 0203 695 8755.</p>
            </div>
            <div class="form_content pt-5">
                <form class="formStyle2" action="">
                    <div class="postCardMain">
                        <div class="postHeader text-dark">
                            <h4>    Hi <strong>{{Auth::user()->name}}</strong> Update Your Profile</h4>
                        </div>
                        <div class="row">
                            <div class="col-lg-4 col-md-5 col-12">
                                <div class="card_Class">
                                    <div class="card">
                                        <img class=" card-img-top" src="{{asset(Auth::user()->profile_photo_path)}}"  alt="Card image cap"
                                            id="img">
                                        <div class="postBody">
                                            <div class="fileUploadCol">
                                                <div class="upload__box">
                                                    <div class="upload__btn-box">
                                                        <label class=" classupload">
                                                            {{-- <span><img src="images/upload-icon.svg" alt="..."></span> --}}
                                                            <p class="uplodework">Upload images</p>
                                                            <input type="file" data-max_length="20"
                                                                class="upload__inputfile" accept="image/*" onchange="document.getElementById('img').src = window.URL.createObjectURL(this.files[0])">
                                                        </label>
                                                    </div>
                                              
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="restpsd_content">
                                    <div class="restPsd">
                                        <h5>Reset password</h5>
                                        <form method="post" action="{{route('user.password.update')}}" >
                                            @csrf
                <div class="form-group">
                <h6>Current password <span class="text-danger">*</span></h6>
                <div class="controls">
                    <input id="current_password" type="password"  name="oldpassword"  class="form-control" required="" > 
                    @error('oldpassword')
                    <span class="text-danger"> {{$message}}</span>
                    @enderror
                </div>
                </div>
                <!-- =================== -->
                <div class="form-group">
                <h6>New password <span class="text-danger">*</span></h6>
                <div class="controls">
                    <input id="password" type="password" name="password" value="" class="form-control" required="" > 
                    @error('password')
                    <span class="text-danger"> {{$message}}</span>
                    @enderror
                </div>
                </div>
                <!-- ====================== -->
                <div class="form-group">
                <h6>Confirm password <span class="text-danger">*</span></h6>
                <div class="controls">
                    <input id="password_confirmation" type="password" name="password_confirmation" value="" class="form-control" required="" > 
                    @error('password_confirmation')
                    <span class="text-danger"> {{$message}}</span>
                    @enderror
                </div>
                </div>
                   
                         
                
                             <div class="form-group">
                            <button type="submit" class="btn btn-primary btn">
                                Reset
                            </button>
                                </div>
                
                                        </form>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-8 col-md-7 col-12">
                                <div class="class_form">
                                
                                    <form method="post" action="">
                                        <div class="form-group height_set">
                                            <label for="exampleInputEmail1">Your email address</label>
                                            <input type="email" class="form-control" id="exampleInputEmail1"
                                                aria-describedby="emailHelp" value="{{Auth::user()->email}}">
                                        </div>
                                        <div class="form-group height_set">
                                            <label for="exampleInputEmail1">Your username</label>
                                            <input type="Your username" class="form-control" name="name" id="exampleInputEmail1"
                                                aria-describedby="emailHelp" value="{{Auth::user()->name}}">
                                        </div>
                                        <div class=" form-group height_set">
                                            <label for="exampleInputEmail1">Phone Number</label>
                                            <input type="tell" class="form-control " name="phone_number" id="exampleInputEmail1"
                                                aria-describedby="emailHelp" value="{{Auth::user()->phone_number}}">
                                        </div>
                                        <div class="form-group height_set">
                                            <label for="exampleInputEmail1">Website URL</label>
                                            <input type="URL" class="form-control" name="website_url" id="exampleInputEmail1"
                                                aria-describedby="emailHelp" value="{{Auth::user()->website_url}}">
                                        </div>
                                        <div class=" form-group">
                                            <label for="exampleInputEmail1">Address</label>
                                            <textarea class="form-control" id="exampleFormControlTextarea1"
                                                rows="3" name="address">{{Auth::user()->address}}</textarea>
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleFormControlTextarea1"> Information about yourself</label>
                                            <textarea class="form-control" id="exampleFormControlTextarea1"
                                                rows="3" name="about_yourself">{{Auth::user()->about_yourself}}</textarea>
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleFormControlTextarea1">Activities and Interests</label>
                                            <textarea class="form-control" id="exampleFormControlTextarea1"
                                                rows="3" name="Activities_and_Interests">{{Auth::user()->Activities_and_Interests}}</textarea>
                                        </div>
                               
                                        <div class="form-group">
                                            <label for="staticEmail" class="col-sm-2 col-form-label">Gender </label>
                                            <select name="cars" id="cars" name="gender">
                                                <option selected="" disabled="">Select Gender</option>
                                                <option value="male"  {{(Auth::user()->gender == 'male') ? 'selected' :' ' }}>Male</option>
                                                <option value="female"  {{(Auth::user()->gender == 'female') ? 'selected' :' ' }}>Female</option>
                                                <option value="other">Other</option>
                                            </select>
                                        </div>
                                                
                                   
                                       
                                        <div class="form-group">
                                            <div class="col-md-6 pt-2">
                                                <label class="labels required">Date of birth</label>
                                                      
                                                        <input type="date" class="form-control" name="dob"  value="{{ date(Auth::user()->dob) }}">
                                                    @error('dob')
                                                    <span class="text-danger"> {{$message}}</span>
                                                    @enderror
                                                    </div>
                                            </div>
                                        <div class="form-group form-check">
                                            <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                            <label class="form-check-label" for="exampleCheck1">
                                                Display on your public profile
                                            </label>
                                        </div>
                                        <div class="row mt-3">
                                            <div class="col-12">
                                                <h6>Email Preferences</h6>
                                                <input type="checkbox" id="vehicle1" name="vehicle1" value="Bike">
                                                <label for="vehicle1"> I wish to receive the Repost Notification
                                                    email</label><br>
                                                <input type="checkbox" id="vehicle2" name="vehicle2" value="Car">
                                                <label for="vehicle2"> I wish to receive newsletters from
                                                    domybiding</label><br>
                                                <input type="checkbox" id="vehicle3" name="vehicle3" value="Boat">
                                                <label for="vehicle3"> I wish to receive special offers from selected
                                                    3rd
                                                    parties</label><br><br>
                                            </div>
                                        </div>
                                        <button type="submit" class="btn btn-primary btn">Submit</button>
                                    </form>
                                </div>

                            </div>
                        </div>
</section>

<div class="backDrop"></div>

@endsection
