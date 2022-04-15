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
              
                    $data->save();
                    $notification = array(
                    'message' => 'Profile Updated successfully',
                    'alert-type' => 'success'
                    );
                    return  redirect()->back()->with($notification);

}


// ======================== Update user profile =======================================

    // ========================
    public function show_classifieds(){

        $data['user'] =User::find(Auth::id());
  
        $data['user_adds'] = AddPost::where('user_account_id')->get();

        return view('frontend.classifieds',$data);

    }
    public function show_email_alerts(){
        return view('frontend.emailalerts');


    }

}
