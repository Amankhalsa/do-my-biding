<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\AddPost;
use Illuminate\Support\Facades\Input;
use Carbon\Carbon; 
use Redirect,Response;
use Image;
use Auth;
class AddSearchController extends Controller
{
    //

    public function search_adds(Request $request){
// dd($request->all());
   $search  = $request->addsearch;
	$data['get_search'] = AddPost::where('post_title', 'LIKE', '%' . $search  . '%')->get();

		// dd($data);
 return view('Frontend.searchadd',$data );

    }

}
