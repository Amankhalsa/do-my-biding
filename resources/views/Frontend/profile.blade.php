
@extends('frontend.home_master')
@section('title', 'Profile' )
@section('home_content')
<!-- section 1 -->
@include('frontend.body.navigation')
{{-- <div class="headerHeight"></div> --}}
<section>
    <div class="postAdCol ">
        <div class="container">
            
            @include('frontend.body.message')

            <div class="form_content pt-5">
           
                    <div class="postCardMain">
                        <div class="postHeader text-dark">
                            <h4>    Hi <strong>{{$user_detail->name}}</strong> Update Your Profile</h4>
                        </div>
                        <div class="row">
                            <div class="col-lg-4 col-md-5 col-12">
                                <div class="card_Class">
                                    <div class="card">
                                        <img class=" card-img-top" src="{{asset($user_detail->profile_photo_path)}}"  alt="Card image cap"
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
                            <button type="submit" class="btn btn-primary">
                                Reset
                            </button>
                                </div>
                            </form>
                                     
                                    </div>
</div>
                            </div>
                            <div class="col-lg-8 col-md-7 col-12">
                                <div class="class_form">
                                    <form method="post" action="{{route('user.data.update',$user_detail->id)}}">
                                        @csrf
                                        <div class="form-group height_set">
                                            <label for="exampleInputEmail1">Your email address</label>
                                            <input type="email" class="form-control" name="email" 
                                                aria-describedby="emailHelp" value="{{$user_detail->email}}">
                                        </div>
                                        <div class="form-group height_set">
                                            <label for="exampleInputEmail1">Your username</label>
                                            <input type="Your username" class="form-control" name="name" 
                                                aria-describedby="emailHelp" value="{{$user_detail->name}}">
                                        </div>
                                        <div class=" form-group height_set">
                                            <label for="exampleInputEmail1">Phone Number</label>
                                            <input type="tell" class="form-control " name="phone_number" 
                                                aria-describedby="emailHelp" value="{{$user_detail->phone_number}}">
                                        </div>
                                        <div class="form-group height_set">
                                            <label for="exampleInputEmail1">Website URL</label>
                                            <input type="URL" class="form-control" name="website_url" 
                                                aria-describedby="emailHelp" value="{{$user_detail->website_url}}">
                                        </div>
                                        <div class=" form-group">
                                            <label for="exampleInputEmail1">Address</label>
                                            <textarea class="form-control" 
                                                rows="3" name="address">{{$user_detail->address}}</textarea>
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleFormControlTextarea1"> Information about yourself</label>
                                            <textarea class="form-control" 
                                                rows="3" name="about_yourself">{{$user_detail->about_yourself}}</textarea>
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleFormControlTextarea1">Activities and Interests</label>
                                            <textarea class="form-control" 
                                                rows="3" name="Activities_and_Interests">{{$user_detail->Activities_and_Interests}}</textarea>
                                        </div>
                               
                                        <div class="form-group">
                                            <label for="staticEmail" class="col-sm-2 col-form-label">Gender </label>
                                            <select name="cars" id="cars" name="gender">
                                                <option selected="" disabled="">Select Gender</option>
                                                <option value="male"  {{($user_detail->gender == 'male') ? 'selected' :' ' }}>Male</option>
                                                <option value="female"  {{($user_detail->gender == 'female') ? 'selected' :' ' }}>Female</option>
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
                                            <input type="checkbox" class="form-check-input" >
                                            <label class="form-check-label" for="exampleCheck1">
                                                Display on your public profile
                                            </label>
                                        </div>
                                        <div class="row mt-3">
                                            <div class="col-12">
                                                <h6>Email Preferences</h6>
                                                <input type="checkbox"  name="vehicle1" value="Bike">
                                                <label for="vehicle1"> I wish to receive the Repost Notification
                                                    email</label><br>
                                                <input type="checkbox"  name="vehicle2" value="Car">
                                                <label for="vehicle2"> I wish to receive newsletters from
                                                    domybiding</label><br>
                                                <input type="checkbox"  name="vehicle3" value="Boat">
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
