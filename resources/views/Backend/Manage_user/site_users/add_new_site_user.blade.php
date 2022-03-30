@extends('backend.admin_master')
@section('title', 'Add new site user')
@section('admin_section')
<style type="text/css">
            .required:after {
    content:" *";
    color: red;
  }
      </style>  
<!-- row start  -->
<div class="row">
<div class="col-md-12">
<div class="container rounded bg-white mb-5">
    <div class="row">
        <div class="col-md-2 border-right">
            <div class="d-flex flex-column align-items-center text-center p-3 py-5"><img class="rounded-circle mt-5" width="150px" src="{{(!empty($view_users->profile_photo_path)) ? url('upload/admin_images/'.$view_users->profile_photo_path):url('upload/no_image.jpg')}}" id="output"><span class="font-weight-bold">Edogaru</span><span class="text-black-50">edogaru@mail.com</span><span> </span></div>
        </div>

        <div class="col-md-6 border-right">
              <form action="{{route('store.newsite_user')}}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="p-3 py-5">
                <div class="d-flex justify-content-between align-items-center mb-3">
                    <h4 class="text-right">Profile Settings</h4>
                </div>
                <div class="row mt-2">
                    <!-- name -->
                    <div class="col-md-6"><label class="labels required">Name</label>
                        <input type="text" class="form-control" name="name" placeholder="Enter your name" >
                        @error('name')
                        <span class="text-danger"> {{$message}}</span>
                        @enderror
                    </div>
                    <div class="col-md-6"><label class="labels required">Email </label>
                    <!-- email -->
                        <input type="email" name="email" class="form-control" placeholder="Enter your email" >
                        @error('email')
                        <span class="text-danger"> {{$message}}</span>
                        @enderror
                    </div>
                </div>

                    <div class="row mt-2">
                    <div class="col-md-6"><label class="labels required">Mobile number</label>
                <!-- phone  --> 
                        <input type="text" class="form-control"  name="phone_number"  placeholder="Enter your mobile number">
                    @error('phone_number')
                    <span class="text-danger"> {{$message}}</span>
                    @enderror
                    </div>
                    <div class="col-md-6"><label class="labels required">Your gender </label>
                    <!-- gender -->
                        <select name="gender" class="form-control"  >
                            <option selected="" disabled="">Select Gender</option>
              
                                <option value="male" >Male</option>
                                <option value="female" >Female</option>
                                <option value="Other" >Other</option>

                        
                         
                            </select>
                    @error('gender')
                    <span class="text-danger"> {{$message}}</span>
                    @enderror
        <!-- <input type="checkbox" name="gender_public" value="1" > -->
                        <!-- <span class="kiwii-position-relative kiwii-bottom-xxxsmall" >Display on your public profile</span> -->
                </div>
                </div>
                
                   
                
                 
                <div class="row mt-3">
                    <div class="col-md-12"><label class="labels required">Country</label>
                        <!-- country  -->
                        <input type="text" class="form-control"  name="country" placeholder="Enter your country name">
                        @error('country')
                        <span class="text-danger"> {{$message}}</span>
                        @enderror
                     </div>
                     <div class="col-md-12"><label class="labels required">Select profile image </label>
                    <!-- profile image  -->
                     <input name="profile_photo_path" class="form-control" type="file" accept="image/*" onchange="document.getElementById('output').src = window.URL.createObjectURL(this.files[0])">
                     @error('profile_photo_path')
                        <span class="text-danger"> {{$message}}</span>
                        @enderror
                    </div>

                    
                    <div class="col-md-12"><label class="labels required">Address Line 1</label>
                            <!-- address -->
                            <textarea class="form-control" rows="3" name="address"  placeholder="Enter your address...">
                            </textarea>
                            @error('address')
                            <span class="text-danger"> {{$message}}</span>
                            @enderror
                    </div>

                      <div class="col-md-12"><label class="labels ">About yourself </label>
                        <!-- About us  -->
                          <textarea class="form-control" rows="3" name="about_yourself" placeholder="Describe yourself here..."> </textarea>
                       
                    </div>
                 
    
                  
               
                    <div class="col-md-12"><label class="labels">Activities and Interests</label>
                        <!-- Activities_and_Interests -->
                          <textarea class="form-control" rows="3" name="Activities_and_Interests" placeholder="Describe Activities and Interests here...">
                           </textarea>
                    </div>
                
             
                </div>
         
                <div class="mt-5 text-center">
<input type="submit" name="submit" class="btn btn-primary profile-button" value="Submit">
                    
                </div>
            </div>
        </div>
    
        <!-- ==================== -->
        <div class="col-md-4">
            <!-- Date of birth -->
            <div class="p-3 mt-5 pt-5">
                  <!-- DOB -->
               <div class="col-md-12 pt-2">
                <label class="labels required">Date of birth</label>
                      
                        <input type="date" class="form-control" name="dob" >
                    @error('dob')
                    <span class="text-danger"> {{$message}}</span>
                    @enderror
                    </div>
                     <!-- postcode  -->
                    <div class="col-md-12 pt-2"><label class="labels required">Postcode  </label>
                       
                        <input type="text" 
                     name="postcode" class="form-control"  placeholder="Enter your Postcode">
                    @error('postcode')
                    <span class="text-danger"> {{$message}}</span>
                    @enderror
                 </div>
       
                   <!-- password  -->
                    <div class="col-md-12 pt-2"><label class="labels required">password  </label>
                      
                        <input type="password" 
                     name="password" class="form-control"  placeholder="Enter your password">
                    @error('password')
                    <span class="text-danger"> {{$message}}</span>
                    @enderror
                 </div>
<!-- Date of birth -->

            </div>
            </form>
        </div>
    </div>
</div>
</div>
</div>

</div>
<!-- col md 12 end  -->
</div>
<!-- row end  -->




@endsection