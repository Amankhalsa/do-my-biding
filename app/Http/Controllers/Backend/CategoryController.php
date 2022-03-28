<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;
use Image;
use Carbon\Carbon; 
use Auth;

class CategoryController extends Controller
{
    //Category view method 
    public function view_front_category(){
        $catdata['get_category'] = Category::get();
        return view('backend.category.view_category',$catdata);
    }
// ================= store category ========================
    public function add_front_category(){
        return view('backend.category.add_category');
    }

// ===================== store category ===================
    public function store_front_category(Request $request){
              $request->validate([
            'category_name' =>'required',
            'maximum_images_allowed'=>'required:',
      
        ],[
            'category_name.required' => 'Please enter category name',
            'maximum_images_allowed.required' => 'Please enter number for max images allowed',
    
        ]);
            $storecategory =  new Category();
            $storecategory->category_name = $request->category_name;
            $storecategory->category_slug_en = strtolower(str_replace(' ', '-',$request->category_name));
            $storecategory->maximum_images_allowed = $request->maximum_images_allowed;
            $storecategory->created_at = Carbon::now();
            $storecategory->save();
        
        $notification = array(
            'message' => 'Category added successfully',
             'alert-type' => 'success'
                );
        return  redirect()->route('view.front.category')->with($notification);
    } 
    // ================= edit category ===================
    public function  edit_front_category($id){
                $editcatdata['edit_catdata'] = Category::find($id);

  
        return view('backend.category.edit_category',$editcatdata);

                    
    }
    // update
    public function update_front_category(Request $request, $id){
            $updatecategory =   Category::find($id);
            $updatecategory->category_name = $request->category_name;
            $updatecategory->category_slug_en = strtolower(str_replace(' ', '-',$request->category_name));
            $updatecategory->maximum_images_allowed = $request->maximum_images_allowed;
            $updatecategory->updated_at = Carbon::now();
            $updatecategory->save();
        
        $notification = array(
            'message' => 'Category updated successfully',
             'alert-type' => 'success'
                );
        return  redirect()->route('view.front.category')->with($notification);

    }
    // delete_front_category
    public function delete_front_category($id){

            $delcatdata = Category::find($id)->delete();;

          $notification = array(
            'message' => 'Category Deleted successfully',
             'alert-type' => 'error'
                );
        return  redirect()->route('view.front.category')->with($notification);      
    }
}
