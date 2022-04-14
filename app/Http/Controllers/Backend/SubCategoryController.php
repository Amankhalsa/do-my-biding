<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\SubCategory;
use Image;
use Carbon\Carbon; 
class SubCategoryController extends Controller
{
    // ========================== view_subcategory ==========================
    public function view_front_subcategory(){
            $subcatdata['get_subcategory'] = SubCategory::orderBy('subcategory_name', 'ASC')->get();
        return view('backend.subcategory.view_subcategory',$subcatdata);
    }

    //========================== add category ==========================
    public function add_front_subcategory(){
          $fetchcatdata['fetch_category'] = Category::orderBy('category_name', 'ASC')->get();
        return view('backend.subcategory.add_subcategory',$fetchcatdata);

    }

    //========================== store sub category  ==========================
    public function store_front_subcategory(Request $request){
            $request->validate([
            'subcategory_name' =>'required',
            'category_id'=>'required | exists:categories,id',
        ],[
            'subcategory_name.required' => 'Please enter Sub category name',
        ]);

            $storesubcat =  new SubCategory();
            $storesubcat->category_id = $request->category_id;
            $storesubcat->subcategory_name = $request->subcategory_name;
            $storesubcat->subcategory_slug   = strtolower(str_replace(' ', '-',$request->subcategory_name));
            $storesubcat->created_at = Carbon::now();
            $storesubcat->save();
        
             $notification = array(
            'message' => 'Sub Category added successfully',
             'alert-type' => 'success'
                );
        return  redirect()->route('view.front.subcategory')->with($notification);
    }
    //========================== edit_front_subcategory ==========================
             public function edit_front_subcategory($id){
                $catdata['fetch_category'] = Category::orderBy('category_name', 'ASC')->get();
                $catdata['edit_subcat'] = SubCategory::find($id);
        return view('backend.subcategory.edit_subcategory',$catdata);
    }
    //========================== update_front_subcategory ==========================
    public function update_front_subcategory(Request $request, $id){
            $storesubcat =  SubCategory::find($id);
            $storesubcat->category_id = $request->category_id;
            $storesubcat->subcategory_name = $request->subcategory_name;
            $storesubcat->subcategory_slug   = strtolower(str_replace(' ', '-',$request->subcategory_name));
            $storesubcat->created_at = Carbon::now();
            $storesubcat->save();
        
            $notification = array(
            'message' => 'Sub Category Updated successfully',
             'alert-type' => 'info'
                );
        return  redirect()->route('view.front.subcategory')->with($notification);

    }
    //========================== delete_front_subcategory ==========================
    public function delete_front_subcategory($id){
            $storesubcat =  SubCategory::find($id)->delete();
            $notification = array(
            'message' => 'Sub Category Deleted successfully',
             'alert-type' => 'error'
                );
        return  redirect()->route('view.front.subcategory')->with($notification);  

    }

}
