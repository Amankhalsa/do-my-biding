<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Sitelogo;
class HomeContoller extends Controller
{
   
    //################# Frontend page view #####################
    public function index(){

        return view('frontend.index');
    }

    // brows a services 
    public function frontend_services(){
        
        return view('frontend.services');


    }

}