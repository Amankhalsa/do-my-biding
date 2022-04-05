<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Testing;
use App\Models\AddPost;
use App\Models\Category;
use App\Models\SubCategory;
use App\Models\SubSubCategory;
use Carbon\Carbon; 
use Redirect,Response;
use Image;
use Auth;

class PostController extends Controller
{
    //
       public function __construct()
            {
                $this->middleware('auth');
            }
// ==================== add post ====================
    public function frontend_addpost(){
        return view('frontend.post.index');
    }
// ==================== Start Testing function ====================
    // public function store_frontend_post(Request $request ){
    //     $data = new Testing();
//================= if check box checked then 1 else 0 =================
    //   if ($request->number == 1 ) {
    //      $data->number = 1;  
    //        $data->save();
    //           $notification = array(
    //             'message' => 'Your post status is  active ',
    //          'alert-type' => 'success'
    //             );
    //         return redirect()->route('home.page')->with($notification);
    //         }
    //   else{
    //       $data->number = 0; 
    //         $data->save();
    //           $notification = array(
    //             'message' => 'Your post  status is inactive ',
    //          'alert-type' => 'error'
    //             );
    //         return redirect()->route('home.page')->with($notification); 
    //         }
//================= if check box checked then 1 else 0 =================

        
    // }

    
    //=================  ajax ================= 

        public function GetSub_Category($category_id)
        {
        $subcategory = SubCategory::where('category_id',$category_id)->orderBy('subcategory_name','ASC')->get();
        return json_encode($subcategory);
        }
    // ======================================= End  Testing function ==============================
    // store ADD post method     
        public function store_frontend_post(Request $request){

            if ($request->file('main_image')) {
                $image = $request->file('main_image');
                $name_gen =hexdec(uniqid()).'.'.$image->getClientOriginalExtension();
                Image::make($image)->resize(694,470)->save('upload/user_add_images/main/'.$name_gen);
                $save_url = 'upload/product/main/'.$name_gen;
            }
         
            $storeadddata = new AddPost();
            $storeadddata->add_id = rand(000000,999999);
            $storeadddata->user_account_id =Auth::user()->id;
            $storeadddata->sub_category_id = $request->sub_category_id;
            $storeadddata->postcode = $request->postcode;
            $storeadddata->post_title = $request->post_title;
            $storeadddata->post_detail = $request->post_detail;
            $storeadddata->expected_price = $request->expected_price;
            $storeadddata->main_image = $save_url;
            $storeadddata->you_are =  Auth::user()->you_are;
            $storeadddata->create_date =  Carbon::now();
            $storeadddata->phone =  $request->phone;
            $storeadddata->phone =  $request->phone;
            $storeadddata->phone =  $request->phone;
            $storeadddata->phone =  $request->phone;
            $storeadddata->phone =  $request->phone;



            
   dd($storeadddata);

                
            }
}
