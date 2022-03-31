<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Testing;
use Image;
use Carbon\Carbon; 
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
    // ======================================= Start Testing function ==============================
    public function store_frontend_post(Request $request ){
// dd($request->all());
        $data = new Testing();
        //================= if check box checked then 1 else 0 =================
      if ($request->numer == 1 ) {
         $data->numer = $request->numer;  

           $data->save();
              $notification = array(
                'message' => 'Your post status is  active ',
             'alert-type' => 'success'
                );
            return redirect()->route('home.page')->with($notification);
            }
      else{
          $data->numer = 0; 
            $data->save();
              $notification = array(
                'message' => 'Your post  status is inactive ',
             'alert-type' => 'error'
                );
            return redirect()->route('home.page')->with($notification); 

            }
        //================= if check box checked then 1 else 0 =================

         

    }
    // ======================================= End  Testing function ==============================

}
