<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Auth;
use App\Models\Admin;
use App\Models\User;
use Image;
use Illuminate\Support\Facades\Hash;
use Carbon\Carbon; 

class AdminController extends Controller
{
    //
    public function index(){
        return view('backend.auth.admin_login');
        // end method 
    }

// ############################## Admin dashboard  view method  ##############################
public function dashboard(){
    return view('backend.index');
}
//  ############################## Admin Login request get  ##############################
public function login(Request $request){
    // dd($request->all());
    $check =$request->all();
    if(Auth::guard('admin')->attempt(['email'=> $check['email'], 'password'=>$check['password']])){

        return redirect()->route('admin.dashboard')->with('error', 'Admin Login successfully');
    }else{
        return back()->with('error', 'Invalid password');
    }
}
//########################### admin logout  ##############################
    public function admin_logout(){

        Auth::guard('admin')->logout();
        return redirect()->route('login_form')->with('error', 'Admin Logout successfully');

    }
// ##############################  admin register page view  ##############################
    public function admin_register(){

            return view('backend.auth.admin_register');

    }
// ##############################  admin User create by register  ##############################

    public function admin_user_create(Request $request){
// dd($request->all());
    $data =array();
    $data['name']=$request->name;
    $data['email']=$request->email;
    $data['password']= Hash::make($request->password);
    $data['created_at']=  Carbon::now();

    Admin::insert($data);
        return redirect()->route('login_form')->with('error', 'Admin Created successfully');

}
//########################## admin can mange site users here  ######################
//================== View all site users ==================
 public function  add_user(){
        $data['get_users'] = user::latest()->get();
     return view('backend.Manage_user.site_users.site_users',$data);
 }
 //================== view single profile user here ==================
public function view_site_user($id){
         $data['view_site_user'] = user::find($id);
    return view('backend.Manage_user.site_users.view_site_user',$data);

}
//================== view add new site user form for store ================== 
public function add_site_user(){
            $data['view_users'] = user::get();
    return view('backend.Manage_user.site_users.add_new_site_user',$data);

}
//================== store site user by submit ==================
public function store_site_user(Request $request){
  
    // add site user validation 
        $request->validate([
            'name' =>'required',
            'email'=>'required|email|unique:users',
            'phone_number' =>'required|numeric',
            'gender' =>'required',
            'dob' =>'required|date',
            'postcode' =>'required|numeric|digits:5',
            'address' =>'required',
            'country' =>'required',
            'profile_photo_path' =>'required|image|mimes:jpg,png,jpeg,svg,webp',
        ],[
            'name.required' => 'Please enter your name',
            'email.required' => 'Please enter your email',
            'phone_number.required' => 'Please enter your Mobile number ',
            'gender.required' => 'Please select your gender',
            'dob.required' => 'Please enter your DOB ',
            'postcode.required' => 'Please enter your postcode ',
            'address.required' => 'Please enter your address',
            'profile_photo_path.required' => 'Please select profile photo',
        ]);
    // add site user validation  end 

    // dd($request->all()); 
      // if image 

            if ($request->file('profile_photo_path')) {
            $image = $request->file('profile_photo_path');
            $name_gen =hexdec(uniqid()).'.'.$image->getClientOriginalExtension();
            Image::make($image)->fit(300,300)->save(public_path('upload/users_profile/'.$name_gen));
            $save_url = 'upload/users_profile/'.$name_gen;
              
        
                $data = new User();
                $data->name = $request->name;
                $data->email =$request->email;
                $data->password =Hash::make($request->password);
                $data->phone_number =$request->phone_number;
                $data->gender =$request->gender;
                $data->dob =date('Y-m-d', strtotime($request->dob));   
                $data->postcode =$request->postcode;
                $data->country =$request->country;
                $data->about_yourself =$request->about_yourself;
                $data->address =$request->address;
                $data->Activities_and_Interests =$request->Activities_and_Interests;
                $data->profile_photo_path =$save_url;
                $data->save();
                $notification = array(
                'message' => 'User profile Updated successfully',
                'alert-type' => 'success'
                );
                return  redirect()->route('add.site_user')->with($notification);

           }else{
        // if image end 
                $data = new User();
                $data->name = $request->name;
                $data->email =$request->email;
                $data->password =Hash::make($request->password);
                $data->phone_number =$request->phone_number;
                $data->gender =$request->gender;
                $data->dob =date('Y-m-d',strtotime($request->dob));   
                $data->postcode =$request->postcode;
                $data->country =$request->country;
                $data->about_yourself =$request->about_yourself;
                $data->address =$request->address;
                $data->Activities_and_Interests =$request->Activities_and_Interests;

                $data->save();
                    $notification = array(
                    'message' => 'User profile Created successfully',
                    'alert-type' => 'success'
                    );
            return  redirect()->route('add.site_user')->with($notification);
 }
           

}
//================== Edit site users info==================
             public function edit_site_user($id){
                $data['edit_site_user'] = user::find($id);
                 return view('backend.Manage_user.site_users.edit',$data);


             }

//================== update site user data ==================
 public function update_site_user(Request $request, $id){
       // dd($request->all());

            $old_image = $request->old_image;
        if ($request->file('profile_photo_path')) {
            $image = $request->file('profile_photo_path');
            $name_gen =hexdec(uniqid()).'.'.$image->getClientOriginalExtension();
            Image::make($image)->fit(300,300)->save(public_path('upload/users_profile/'.$name_gen));
            $save_url = 'upload/users_profile/'.$name_gen;
            if (file_exists($old_image)) 
                { 
                    unlink($old_image); 
                }
                $data = User::find($id);
                $data->name = $request->name;
                $data->email =$request->email;
                $data->phone_number =$request->phone_number;
                $data->gender =$request->gender;
                $data->dob =date('Y-m-d', strtotime($request->dob));   
                $data->postcode =$request->postcode;
                $data->country =$request->country;
                $data->about_yourself =$request->about_yourself;
                $data->address =$request->address;
                $data->Activities_and_Interests =$request->Activities_and_Interests;
                $data->profile_photo_path =$save_url;
                $data->save();
                $notification = array(
                'message' => 'User profile Updated successfully',
                'alert-type' => 'success'
                );
                return  redirect()->route('add.site_user')->with($notification);

           }else{
                $data = User::find($id);
                $data->name = $request->name;
                $data->email =$request->email;
                $data->phone_number =$request->phone_number;
                $data->gender =$request->gender;
                $data->dob =date('Y-m-d', strtotime($request->dob));   
                $data->postcode =$request->postcode;
                $data->country =$request->country;
                $data->about_yourself =$request->about_yourself;
                $data->address =$request->address;
                $data->Activities_and_Interests =$request->Activities_and_Interests;
           
                $data->save();

                    $notification = array(
                    'message' => 'User profile Updated successfully',
                    'alert-type' => 'success'
                    );
            return  redirect()->route('add.site_user')->with($notification);
 
           }

 }
// ================== Delete site user data from DB permanently ===============
public function delete_site_user($id){
                $image = User::find($id);
                $old_image =$image->profile_photo_path;
                // dd(  $old_image);
                User::find($id)->delete();
                      $notification = array(
        'message' => 'User profile Deleted successfully',
        'alert-type' => 'error'
    );
return  redirect()->route('add.site_user')->with($notification);

}

// Reset pasword by admin 




// ========================================================================================

 ############################## Manage  admin user  from here ##############################  

// ========================================================================================
  public function  add_admin_user(){
        $data['get_admin_users'] = Admin::latest()->get();
     return view('backend.Manage_user.admin_users.view_admin_users', $data);
 }
 

}
