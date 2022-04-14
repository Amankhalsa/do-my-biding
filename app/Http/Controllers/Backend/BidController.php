<?php

namespace App\Http\Controllers\Backend;

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
class BidController extends Controller
{
// view bids
    public function front_bid_view(){
        $data['get_posts']  = AddPost::latest()->get();
        return view('frontend.managebids.index',$data);
    }
// ajax 
public function Get_Sub_Category($category_id)
{
   $subcat = SubCategory::where('category_id',$category_id)->orderBy('subcategory_name','ASC')->get();
   return json_encode($subcat);
}
    // Edit 
    public function front_bid_edit($id){
        $editdata['edit_posts']  = AddPost::find($id);
        return view('frontend.managebids.edit',$editdata);
    }
    //======================================== update bid start  =================================
    public function update_front_bid(Request $request, $id){
        // dd($request->all());
        $request->validate([
            'category_id'=>'required',
            'sub_category_id'=>'required',
            'post_detail' =>'required',
            'expected_price' =>'required',
            'postcode' =>'required',
            'phone' =>'required',
            // 'main_image' =>'required|image|mimes:jpg,png,jpeg,svg,webp|max:4096',
        ],[
            'post_title.required' => 'Please enter small  post title',
            'category_id.required' => 'Please select any category',
            'sub_category_id.required' => 'Please select any Sub category ',
            'post_detail.required' => 'Please enter your post Description ',
            'phone.required' => 'Please enter your Mobile/Phone number',
            // 'main_image.max' => 'Maximum file size to upload is 4MB  . If you are uploading a photo, try to reduce its resolution to make it under 4MB',
            // 'main_image.required' => 'You must use the Upload image button to select which file you wish to upload',          
        ]);
        // image updation section 
        $old_image = $request->old_image;
        if ($request->file('main_image')) {
            $image = $request->file('main_image');
            $name_gen =hexdec(uniqid()).'.'.$image->getClientOriginalExtension();
            Image::make($image)->save('upload/user_add_images/main/'.$name_gen);
            // ->resize(694,470) FOR RESIZE IMAGE 
            $save_url = 'upload/user_add_images/main/'.$name_gen;
            // dd($save_url);
            // unlink if 
            if (file_exists($old_image)) 
                { 
            unlink($old_image); 
                    }
            // unlink if 
            $updatedata = AddPost::find($id);
            $updatedata->category_id = $request->category_id;
            $updatedata->sub_category_id = $request->sub_category_id;
            $updatedata->postcode = $request->postcode;
            $updatedata->post_title = $request->post_title;
            $updatedata->post_slug = strtolower(str_replace(' ', '-',$request->post_title));
            $updatedata->post_detail = $request->post_detail;
            $updatedata->expected_price = $request->expected_price;
            $updatedata->main_image = $save_url;
            $updatedata->phone =  $request->phone;
            // if else start 
            if ($request->status == 1 ) {
                     $updatedata->status = 1;  
                       $updatedata->save();
                          $notification = array(
                            'message' => 'Post updated with active status ',
                         'alert-type' => 'success'
                            );
                        return redirect()->route('front.bid.view')->with($notification);
                        }
                  else{
                      $updatedata->status = 0; 
                        $updatedata->save();
                          $notification = array(
                            'message' => 'Post  updated with inactive status',
                         'alert-type' => 'error'
                            );
                        return redirect()->route('front.bid.view')->with($notification); 
                        }
        // if else end  
        }else{      
        // image updation section  
        $updatedata = AddPost::find($id);
        $updatedata->category_id = $request->category_id;
        $updatedata->sub_category_id = $request->sub_category_id;
        $updatedata->postcode = $request->postcode;
        $updatedata->post_title = $request->post_title;
        $updatedata->post_slug = strtolower(str_replace(' ', '-',$request->post_title));
        $updatedata->post_detail = $request->post_detail;
        $updatedata->expected_price = $request->expected_price;
        // $updatedata->main_image = $save_url;
        $updatedata->phone =  $request->phone;
        // if else start 
        if ($request->status == 1 ) {
                 $updatedata->status = 1;  
                   $updatedata->save();
                      $notification = array(
                        'message' => 'Post updated with active status ',
                     'alert-type' => 'success'
                        );
                    return redirect()->route('front.bid.view')->with($notification);
                    }
              else{
                  $updatedata->status = 0; 
                    $updatedata->save();
                      $notification = array(
                        'message' => 'Post  updated with inactive status',
                     'alert-type' => 'error'
                        );
                    return redirect()->route('front.bid.view')->with($notification); 
                    }
                     // if else end  
                    }
                //    main  else end 
        // $dataid = $updatedata->id;    

    }   
    // ========================================== end  update bid ===========================
    // ============================== delete_front_bid with multiple pics ===================
        public function delete_front_bid($id){
            $image = AddPost::find($id);
            $old_image =$image->main_image;
            // dd( $old_image);
          if (file_exists($old_image)) 
        { 
            unlink($old_image); 
        }
        AddPost::find($id)->delete();
        $multi_imgs = MultiImg::where('post_id',$id)->get();
        foreach ($multi_imgs as  $img) {
			if (file_exists($img->photo_name)) {
					unlink($img->photo_name);
				}
                MultiImg::where('post_id',$id)->delete();

		    			// dd($img->photo_name);
    		 }  //end foreach
        $notification = array(
         'message' => 'Post deleted successfully ',
         'alert-type' => 'error'
            );
        return redirect()->route('front.bid.view')->with($notification);
        }
        // ============================== delete_front_bid with multiple pics ===================

        // ============================ Active bid poseted by Admin ==========================
        public function active_front_bid($id){
            $activeedata = AddPost::find($id);
            $activeedata->status = 1;  
            $activeedata->save();
               $notification = array(
                 'message' => 'Post  status  is Active',
              'alert-type' => 'success'
                 );
             return redirect()->route('front.bid.view')->with($notification);

        }
                // ============================ Inactive bid poseted by user ==========================
                public function inactive_front_bid($id){
                    $activeedata = AddPost::find($id);
                    $activeedata->status = 0;  
                    $activeedata->save();
                       $notification = array(
                         'message' => 'Post  status  is inactive',
                      'alert-type' => 'error'
                         );
                     return redirect()->route('front.bid.view')->with($notification);
        
                }




    }
 


