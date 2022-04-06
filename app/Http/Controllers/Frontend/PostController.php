<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
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

 

        // ajax 
        public function Get_Sub_Category($category_id)
        {
           $subcat = SubCategory::where('category_id',$category_id)->orderBy('subcategory_name','ASC')->get();
        
           return json_encode($subcat);
        }
    // ======================================= End  Testing function ==============================
    // store ADD post method     
        public function store_frontend_post(Request $request){

            // validation 
                $request->validate([
            'post_title' =>'required|string|max:255',
            'category_id'=>'required',
            'sub_category_id'=>'required',
            'postcode' =>'required',
            'post_detail' =>'required',
            'expected_price' =>'required',
            'postcode' =>'required',
            'phone' =>'required',
            'agree' =>'required',

           
            'main_image' =>'required|image|mimes:jpg,png,jpeg,svg,webp|max:4096',
        ],[
            'post_title.required' => 'Please enter small  post title',
            'category_id.required' => 'Please select any category',
            'sub_category_id.required' => 'Please select any Sub category ',
            'postcode.required' => 'Please enter your post code address',
            'post_detail.required' => 'Please enter your post Description ',
            'phone.required' => 'Please enter your Mobile/Phone number',
            'main_image.max' => 'Maximum file size to upload is 4MB  . If you are uploading a photo, try to reduce its resolution to make it under 4MB',
            'main_image.required' => 'You must use the Upload image button to select which file you wish to upload',
            'agree.required' => 'Please Accept Terms and Conditions, Posting Guidelines and accept the Privacy Policy. ',
            
        ]);
            // validation 


            if ($request->file('main_image')) {
                $image = $request->file('main_image');
                $name_gen =hexdec(uniqid()).'.'.$image->getClientOriginalExtension();
                Image::make($image)->save('upload/user_add_images/main/'.$name_gen);
                // ->resize(694,470) FOR RESIZE IMAGE 
                $save_url = 'upload/user_add_images/main/'.$name_gen;
                // dd($save_url);

            }
            $storeadddata = new AddPost();   
            $storeadddata->user_account_id =Auth::user()->id;
            $storeadddata->category_id = $request->category_id;
            $storeadddata->sub_category_id = $request->sub_category_id;
            $storeadddata->postcode = $request->postcode;
            $storeadddata->post_title = $request->post_title;
            $storeadddata->post_slug = str_replace(' ', '-',$request->post_title);
            $storeadddata->post_detail = $request->post_detail;
            $storeadddata->expected_price = $request->expected_price;
            $storeadddata->main_image = $save_url;
            $storeadddata->you_are =  Auth::user()->you_are;
            $storeadddata->create_date =  Carbon::now();
            $storeadddata->phone =  $request->phone;
            $storeadddata->add_id = rand(000000,999999);
            $storeadddata->save();
            $dataid = $storeadddata->id;
            // for multiple images  loop        
            if ($request->file('photo_name')) {
                $images = $request->file('photo_name');
                foreach ($images as  $value) {
                    $make_name =hexdec(uniqid()).'.'.$value->getClientOriginalExtension();
                    Image::make($value)->save('upload/user_add_images/multi/'.$make_name);
                    // ->resize(917,1000)
                    $uploadpath = 'upload/user_add_images/multi/'.$make_name;

                    $storemulti_img = new MultiImg();
                    $storemulti_img->post_id = $dataid ;
                    $storemulti_img->photo_name = $uploadpath ;
                    $storemulti_img->created_at = Carbon::now() ;
                    // dd($storemulti_img);
                    $storemulti_img->save();
                }
      
            }
            // for multiple images loop    

           
                    $notification = array(
                        'message' => 'Your post inserted successfully',
                        'alert-type' => 'success' );
           
                        return redirect()->route('serives.page')->with($notification);
            
            
        }
    }
    
