<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Location;
use Carbon\Carbon; 
use Auth;
class AddLocatController extends Controller
{
    //view locations 
    public function view_front_location(){
        $data['getlocation'] = Location::orderBy('name', 'ASC')->get();
        return view('backend.location.location',$data);
    }

    // add_frontview_location
    public function add_frontview_location(){
        return view('backend.location.add_location');

    }
    // store_frontview_location
    public function store_frontview_location(Request $request){
                $request->validate([
            'name' =>'required',
            ]);
            $storelocat =  new Location();
            $storelocat->name = $request->name;
            $storelocat->slug_name = strtolower(str_replace(' ', '-',$request->name));
            $storelocat->created_at = Carbon::now();
            $storelocat->save();
              $notification = array(
                'message' => 'Location added  successfully',
                'alert-type' => 'success'
                );
                return  redirect()->route('view.all.location')->with($notification);

    }

    // edit  location 
    public function edit_frontview_location($id){
        $editdata['editlocation'] = Location::orderBy('name', 'ASC')->find($id);
        return view('backend.location.edit_location',$editdata);

    }
    // update location 
    public function update_frontview_location(Request $request, $id){


        $request->validate([
            'name' =>'required',
            ]);

            $storelocat = Location::find($id);
            $storelocat->name = $request->name;
            $storelocat->slug_name = strtolower(str_replace(' ', '-',$request->name));
            $storelocat->updated_at = Carbon::now();
            $storelocat->save();

              $notification = array(
                'message' => 'Location Updated  successfully',
                'alert-type' => 'info'
                );
                return  redirect()->route('view.all.location')->with($notification);


    }
    //Delete location 
    public function delete_frontview_location($id){
        $deldata = Location::find($id)->delete();
          $notification = array(
                'message' => 'Location Deleted  successfully',
                'alert-type' => 'error'
                );
                return  redirect()->route('view.all.location')->with($notification);

    }

}



