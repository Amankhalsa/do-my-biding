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


    public function update_user_password(Request $request){
        $validateData = $request->validate([
            'oldpassword' => 'required',
            'password' => 'required|confirmed',
            // 'new_confirm_password' => 'same:new_password',
        ]);
        $hashedpassword = Auth::user()->password;
	if (Hash::check($request->oldpassword,$hashedpassword)) {
		$user = User::find(Auth::id());
		$user->password = Hash::make($request->password);
		$user->save();
		Auth::logout();
			  $notification = array(
        'message' => 'Password Updated successfully',
        'alert-type' => 'success'
    );
		return redirect()->route('user.logout')->with($notification);


	}else{
     
		return redirect()->back();
	}

    }
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
