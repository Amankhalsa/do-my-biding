<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\AddPost;

use Carbon\Carbon; 
use Redirect,Response;
use Image;
use Auth;
class AddSearchController extends Controller
{
    //

    public function search_adds(Request $request){
        if($request->has('addsearch')){
            $items = AddPost::search($request->addsearch)->first();
         

        }else{
            $items = AddPost::paginate(6);
        }
        return view('frontend.searchadd',compact('items'));






    }

}
