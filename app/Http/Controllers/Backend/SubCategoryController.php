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
    //
    public function view_front_subcategory(){
            $subcatdata['get_subcategory'] = SubCategory::get();
        return view('backend.subcategory.view_subcategory',$subcatdata);
    }
}
