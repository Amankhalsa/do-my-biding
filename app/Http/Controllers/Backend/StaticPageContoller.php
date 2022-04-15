<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class StaticPageContoller extends Controller
{
    //
    public function privacy(){
        return view('backend.staticpages.privacy');
    }
}
