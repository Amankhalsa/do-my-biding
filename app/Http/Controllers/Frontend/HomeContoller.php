<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Sitelogo;
use App\Models\Testing;
use App\Models\AddPost;
use App\Models\Category;
use App\Models\SubCategory;
use App\Models\SubSubCategory;
use App\Models\MultiImg;
use Carbon\Carbon; 
use Redirect,Response;
use Image;
use Auth;
use Tracker;
use Illuminate\Support\Facades\DB;
class HomeContoller extends Controller
{
    //################# Frontend page view #####################
    public function index(){
        return view('frontend.index');
    }
    // brows a services 
    public function frontend_services(){
            $getpost['post_data_single_img'] =  AddPost::where('status', '=', 1)->latest()->get();
       //niche ali multi  post_images
            $getpost['post_data_multi_img'] =  MultiImg::where('post_id')->get();
        return view('frontend.services',$getpost);
    }
    // Frontend add method with multiple pics 
    public function frontend_add($id){
        $getaddpost['get_post_data'] =  AddPost::find($id);
        $getaddpost['get_data_multi_img'] =  MultiImg::where('post_id','=',$id)->get();
        // $getaddpost['visitors'] = Tracker::User(60 * 24 * 7);
        return view('frontend.add_page',$getaddpost);
    }


}