<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Auth;
use App\Models\Admin;
use Illuminate\Support\Facades\Hash;
use Carbon\Carbon; 

class AdminController extends Controller
{
    //
    public function index(){
        return view('admin.admin_login');
        // end method 
    }
// ############################## Admin dashboard  view method  ##############################
public function dashboard(){
    return view('admin.index');
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

            return view('admin.admin_register');

    }
// ##############################  admin User create by register  ##############################

    public function admin_user_create(Request $request){
// dd($request->all());
    $data =array();
    $data['name']=$request->name;
    $data['email']=$request->email;
    $pwdcode = $request->password;
    $data['code']=$pwdcode;
    $data['password']= Hash::make($pwdcode);
    $data['created_at']=  Carbon::now();

    Admin::insert($data);
        return redirect()->route('login_form')->with('error', 'Admin Created successfully');


}


}
