<?php

namespace App\Http\Controllers\Frontend;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\AddPost;
use App\Models\Category;
use App\Models\SubCategory;
use App\Models\SubSubCategory;
use App\Models\MultiImg;
use App\Models\User;
use Carbon\Carbon; 
use Redirect,Response;
use Image;
use Auth;
use Tracker;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserDetailController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }


public function user_profile(){
    $data['user_detail'] =  User::find(Auth::id());
    return view('frontend.profile',$data);
}


    public function update_user_password(Request $request)
    {
        $validateData = $request->validate([
            'oldpassword' => 'required',
            'password' => 'required|confirmed',
            // 'new_confirm_password' => 'same:new_password',
        ]);
        $user = User::find(Auth::id());
        $hashedpassword = $user->password;
        // dd($user,$request->all());
        if (Hash::check($request->oldpassword,$user->password)) {
           
            $user->password = Hash::make($request->password);
            $user->save();
            Auth::logout();
                $notification = array(
            'message' => 'Password Updated successfully',
            'alert-type' => 'success'
        );
            return redirect()->route('login')->with($notification);


        }else{
        
            return redirect()->back();
        }

    }
// ======================== Update user profile =======================================
public function update_user_profile_data(Request $request, $id){
    // dd($request->all());
                    $data =  User::find($id);
                    $data->name = $request->name;
                    $data->email =$request->email;
                    $data->phone_number =$request->phone_number;
                    $data->gender =$request->gender;
                    $data->dob =date('Y-m-d', strtotime($request->dob));   
                    $data->postcode =$request->postcode;
                    $data->website_url =$request->website_url;
                    $data->about_yourself =$request->about_yourself;
                    $data->address =$request->address;
                    $data->Activities_and_Interests =$request->Activities_and_Interests;
               
                    if ($request->newsletters == 1 ) {
                    $data->newsletters =1;
                    }
                    else{
                    $data->newsletters =0;  
                    }
                    if ($request->special_offers == 1 ) {
                    $data->special_offers =1; 
                    }
                    else{
                    $data->special_offers =0; 
                    }
                    if ($request->email_notification == 1 ) {
                        $data->email_notification = 1;  
                        }
                        else{
                        $data->email_notification = 0;  
                        }
                    $data->save();
                    $notification = array( 'message' => 'Profile Updated successfully','alert-type' => 'success');
                    return  redirect()->back()->with($notification);

}
//================== update user profile photo ==================

                public function update_user_picture(Request $request, $id){
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
                    
                            $data->profile_photo_path =$save_url;
                            $data->save();
                            $notification = array('message' => 'Your profile photo successfully','alert-type' => 'info');
                            return  redirect()->back()->with($notification);
            
                       }


                
                }

// =========== Update user profile =================
    public function show_classifieds(){

        $data['user'] =User::find(Auth::id());
  
        $data['user_adds'] = AddPost::where('user_account_id',Auth::id())->get();
        return view('frontend.classifieds',$data);

    }
//mam dd lgana abi featch ni krai on name kraya hai 
    public function show_email_alerts(){
        return view('frontend.emailalerts');


    }

}
