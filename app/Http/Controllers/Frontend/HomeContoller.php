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
class HomeContoller extends Controller
{

   
    //################# Frontend page view #####################
    public function index(){
        return view('frontend.index');
    }

    // brows a services 
    public function frontend_services(){
            $getpost['post_data_single_img'] =  AddPost::latest()->get();
            
            $getpost['post_data_multi_img'] =  MultiImg::latest()->get();

        return view('frontend.services',$getpost);


    }

}