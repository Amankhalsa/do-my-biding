<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomeContoller extends Controller
{
    //################# Frontend page view #####################
    public function index(){
        return view('Frontend.index');
    }
     //################# Frontend  #####################
}
