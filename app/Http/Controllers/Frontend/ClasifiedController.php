<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\AddPost;
use App\Models\Category;
use App\Models\SubCategory;
use App\Models\SubSubCategory;
use App\Models\MultiImg;
use Image;
use Auth;
use Illuminate\Support\Facades\DB;
class ClasifiedController extends Controller
{
    //
    public function __construct()
        {
        $this->middleware('auth');
            }
//======================= view clasified add =======================
        public function view_clasified_add($id){
            $data['get_post_data'] =  AddPost::find($id);
            $data['get_data_multi_img'] =  MultiImg::where('post_id','=',$id)->get();
            return view('frontend.clasified.view', $data);
            }


// ======================= Get edit data  ======================= 
        // edit clasified add 
        public function edit_clasified_add($id){
            $data['catdata']=  Category::orderBy('category_name','ASC')->get();
            $data['sub_catdata'] =SubCategory::get();
            $data['sub_subcatdata'] =  SubSubCategory::get();
            $data['posted_add'] =  AddPost::find($id);
            $data['multi_img'] =  MultiImg::where('post_id','=',$id)->get();
            return view('frontend.clasified.edit',$data);

            }
 //======================= update clasified add by user ===================
            public function update_clasified_add(Request $request, $id ){
                // dd($request->all());
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
               
                               $updatedata->save();
                                  $notification = array(
                                    'message' => 'Post image updated successfully ',
                                 'alert-type' => 'success'
                                    );
                                return redirect()->back()->with($notification);
                             
               
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
              
                           $updatedata->save();
                              $notification = array(
                                'message' => 'Post updated successfully ',
                             'alert-type' => 'success'
                                );
                            return redirect()->back()->with($notification);
                       
             
                             // if else end  
                            }

            }

            // ============== Delete post by user  ==================

                public function delete_clasified_add($id){
                
                    $image = AddPost::find($id);
                    $old_image =$image->main_image;
                    dd( $old_image);
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

        }
