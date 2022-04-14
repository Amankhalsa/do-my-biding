<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\SubCategory;
use App\Models\SubSubCategory;
use Image;
use Carbon\Carbon; 
use Redirect,Response;
class SubSubCategoryController extends Controller
{
    //
    public function view_sub_subcategory(){
        $getsubdata['getsub_subcat'] = SubSubCategory::get();
        // orderBy('sub_subcategory_name	', 'ASC')
        return view('backend.sub_subcategory.view_sub_subcat',$getsubdata);
    }
// ==================================== sub  sub category for add  ====================================
    public function add_sub_subcategory(){
        $fetchcatdata['fetch_category'] = Category::orderBy('category_name', 'ASC')->get();
        $fetchcatdata['sub_subcategory'] = SubCategory::orderBy('subcategory_name', 'ASC')->get();
        return view('backend.sub_subcategory.add_sub_subcat',$fetchcatdata);

    }
// ajax 
     public function GetSubCategory($category_id)
     {
        $subcat = SubCategory::where('category_id',$category_id)->orderBy('subcategory_name','ASC')->get();
        return json_encode($subcat);
     }



    // ==================================== store sub sub category data  ====================================

    public function store_sub_subcategory(Request $request){

        $storesubcat = new  SubSubCategory();
        $storesubcat->category_id = $request->category_id;
        $storesubcat->subcategory_id = $request->subcategory_id;
        $storesubcat->sub_subcategory_name	 = $request->sub_subcategory_name;
        $storesubcat->Sub_subcategory_slug	= strtolower(str_replace(' ', '-',$request->sub_subcategory_name)); 
        $storesubcat->save();
        // dd($storesubcat);
        $notification = array(
            'message' => 'Sub SubCategory added successfully',
             'alert-type' => 'success' );
        return redirect()->route('view.front.sub_subcategory')->with($notification);
        
    }
    //==================================== sub sub category edit ====================================
    public function edit_sub_subcategory($id){
        $editsubdata['editsub_subcat'] = SubSubCategory::find($id);
        $editsubdata['fetch_category'] = Category::orderBy('category_name', 'ASC')->get();
        $editsubdata['sub_subcategory'] = SubCategory::orderBy('subcategory_name', 'ASC')->get();
        return view('backend.sub_subcategory.edit_sub_subcat',$editsubdata);


    }

    //============================ update sub sub category data ====================================
    public function update_sub_subcategory(Request $request, $id){
        $storesubcat =  SubSubCategory::find($id);
        $storesubcat->category_id = $request->category_id;
        $storesubcat->subcategory_id = $request->subcategory_id;
        $storesubcat->sub_subcategory_name	 = $request->sub_subcategory_name;
        $storesubcat->Sub_subcategory_slug	= strtolower(str_replace(' ', '-',$request->sub_subcategory_name)); 
        $storesubcat->save();
        // dd($storesubcat);
        $notification = array(
            'message' => 'Sub SubCat updated successfully',
             'alert-type' => 'info' );
        return redirect()->route('view.front.sub_subcategory')->with($notification);
    }
    //============================ Delete sub sub category data ====================================
        public function delete_sub_subcategory($id){
            $deletesubsubcat = SubSubCategory::find($id)->delete();
            // dd($deletesubsubca);
            $notification = array(
                'message' => 'Data Deleted successfully',
                 'alert-type' => 'error' );
            return redirect()->route('view.front.sub_subcategory')->with($notification);
         }

}
