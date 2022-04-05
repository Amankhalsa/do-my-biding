@extends('backend.admin_master')
@section('title', 'Edit site user')
@section('admin_section')


        
<!-- row start  -->
<div class="row">
<div class="col-md-12">
<div class="container rounded bg-white mb-5">
    <div class="row">
        <div class="col-md-2 border-right">
            <!-- https://st3.depositphotos.com/15648834/17930/v/600/depositphotos_179308454-stock-illustration-unknown-person-silhouette-glasses-profile.jpg -->
            <div class="d-flex flex-column align-items-center text-center p-3 py-5"><img class="rounded-circle mt-5" width="150px" src="{{(!empty($edit_site_user->profile_photo_path)) ? asset($edit_site_user->profile_photo_path):url('upload/no_image.jpg')}}" id="output"><span class="font-weight-bold">{{$edit_site_user->name}}</span><span class="text-black-50">{{$edit_site_user->email}}</span><span> </span></div>
        </div>

        <div class="col-md-6 border-right">
              <form action="{{route('update.site_user',$edit_site_user->id)}}" method="post" enctype="multipart/form-data">
            @csrf

        <input type="hidden" name="old_image" value="{{$edit_site_user->profile_photo_path}}">

         
            <div class="p-3 py-5">
                <div class="d-flex justify-content-between align-items-center mb-3">
                    <h4 class="text-right"> Edit Profile Settings</h4>
                </div>
                <div class="row mt-2">
                    <!-- name -->
                    <div class="col-md-6"><label class="labels">Name</label>
                        <input type="text" class="form-control" name="name" value="{{$edit_site_user->name}}"></div>
                    <div class="col-md-6"><label class="labels">Email </label>
                    <!-- email -->
                        <input type="email" name="email" class="form-control" value="{{$edit_site_user->email}}" ></div>
                </div>

                    <div class="row mt-2">
                    <div class="col-md-6"><label class="labels">Mobile number</label>
                <!-- phone  --> 
                        <input type="text" class="form-control"  name="phone_number" value="{{$edit_site_user->phone_number}}"></div>
                    <div class="col-md-6"><label class="labels">Your gender </label>
                    <!-- gender -->
                        <select name="gender" class="form-control"  >
                            <option selected="" disabled="">Select Gender</option>
              
            <option value="male" {{($edit_site_user['gender']=='male')?'selected':''}}>Male</option>
            <option value="female" {{($edit_site_user['gender']=='female')?'selected':''}}>Female</option>
            <option value="Other" {{($edit_site_user['gender']=='Other')?'selected':''}}>Other</option>

                        
                         
                            </select>

                </div>
                </div>
                    <div class="row mt-2">
                   
                </div>
                   
                
                 
                <div class="row mt-3">
                    <div class="col-md-12"><label class="labels">Country</label>
                        <!-- country  -->
                        <input type="text" class="form-control"  name="country" value="{{$edit_site_user->country}}">
                     <div class="col-md-12"><label class="labels">Edit profile image </label>
                    <!-- profile image  -->
                     <input name="profile_photo_path" class="form-control" type="file" accept="image/*" onchange="document.getElementById('output').src = window.URL.createObjectURL(this.files[0])">
                    </div>

                    </div>


                      <div class="col-md-12"><label class="labels">About yourself </label>
                        <!-- About us  -->
                          <textarea class="form-control" rows="3" name="about_yourself"> {{$edit_site_user->about_yourself}}</textarea>
                    </div>
                    <div class="col-md-12"><label class="labels">Address Line 1</label>
                     <!-- address -->
                         <textarea class="form-control" rows="3" name="address" value="{{$edit_site_user->address}}">{{$edit_site_user->address}}
                         </textarea>
                    </div>
    
                  
               
                    <div class="col-md-12"><label class="labels">Activities and Interests</label>
                        <!-- Activities_and_Interests -->
                          <textarea class="form-control" rows="3" name="Activities_and_Interests">
                            {{$edit_site_user->Activities_and_Interests}}</textarea>
                    </div>
                
             
                </div>
         
                <div class="mt-5 text-center">
<input type="submit" name="submit" class="btn btn-primary profile-button" value="Submit">
                    
                </div>
            </div>
        </div>
    
        <!-- ==================== -->
        <div class="col-md-4">
            <div class="p-3 pt-5 mt-5">
        <div class="col-md-12 pt-2"><label class="labels">Date of birth</label>
                        <!-- DOB -->
                        <input type="date" class="form-control" name="dob" value="{{ date($edit_site_user->dob) }}"></div>
                    <div class="col-md-12 pt-2"><label class="labels">Postcode  </label>
                        <!-- postcode  -->
                        <input type="text" 
                     name="postcode" class="form-control" value="{{$edit_site_user->postcode}}"></div>
                     
            </div>
            </form>
        </div>
    </div>
</div>
</div>
</div>

-
<!-- row end  -->




@endsection