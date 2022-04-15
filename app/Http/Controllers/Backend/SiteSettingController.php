<?php

namespace App\Http\Controllers\Backend;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Sitelogo;
use App\Models\FrontBanner;
use Image;
use Carbon\Carbon; 
use Auth;
use App\Models\Admin;
class SiteSettingController extends Controller
{
    // ################################# logo setting ##############################################
        //==================== Frontend  ======================
        public function view_site_logo(){
            $data['get_logo'] = Sitelogo::get(); 
            return view('backend.sitelogo.view_logo',$data);
        }
        // ====================== add site logo ======================
        public function add_site_logo(){         
            return view('backend.sitelogo.add_logo');

        }
        //====================== store frontend home page logo ======================
        public function store_site_logo(Request $request){
            $request->validate([
            'logo' =>'required|image|mimes:jpg,png,jpeg,svg,webp|max:5240',
        ],[  
            'logo.required' => 'Please select logo photo',
        ]);
                if ($request->file('logo')) {
                        $image = $request->file('logo');
                        $name_gen =hexdec(uniqid()).'.'.$image->getClientOriginalExtension();
                        Image::make($image)->fit(129,69)->save(public_path('upload/sitelogo/'.$name_gen));
                        $save_url = 'upload/sitelogo/'.$name_gen;
                }
                        $data = new Sitelogo();
                        $data->logo =$save_url;
                        $data->admin_id = 1;
                        $data->created_at = Carbon::now();
                        $data->save();
                            $notification = array(
                                'message' => 'Site logo published successfully',
                                'alert-type' => 'success'
                            );
                return  redirect()->route('view.site.logo')->with($notification);
        }
        //====================== edit logo ======================
        public function edit_site_logo($id){
                $data['edit_logo'] = Sitelogo::find($id); 
                    return view('backend.sitelogo.edit_logo',$data);

        }
        //====================== update logo ======================
        public function update_site_logo(Request $request,$id ){
                        $old_image = $request->old_image;
                    if ($request->file('logo')) {
                        $image = $request->file('logo');
                        $name_gen =hexdec(uniqid()).'.'.$image->getClientOriginalExtension();
                        Image::make($image)->fit(129,69)->save(public_path('upload/sitelogo/'.$name_gen));
                        $save_url = 'upload/sitelogo/'.$name_gen;
                    }
                  if (file_exists($old_image)) 
                { 
                    unlink($old_image); 
                    }
                        $data = Sitelogo::find($id);
                        $data->logo =$save_url;
                        $data->admin_id = 1;
                        $data->save();
              $notification = array(
                                'message' => 'Site logo published successfully',
                                'alert-type' => 'success'
                            );
            return redirect()->route('view.site.logo')->with($notification);
        }
        // ====================  Delete logo ========================
        public function delete_site_logo($id){
                $logoimage = Sitelogo::find($id);
                $old_logo_image =$logoimage->logo;
                // dd($old_banner_image);
                   if (file_exists($old_logo_image)) 
                { 
                    unlink($old_logo_image); 
                }
                Sitelogo::find($id)->delete();
                $notification = array(
                    'message' => 'Site Logo Deleted successfully',
                    'alert-type' => 'error'
                );
        return  redirect()->route('view.site.logo')->with($notification);
        }
// ################################# Banner  setting ##############################################
//==================== front_banners view   ====================
        public function view_front_banners(){
// take(1)
            $data['front_banner'] = FrontBanner::get(); 
            return view('backend.frontbanner.index',$data);
        }
//==================== banner add banner  ====================
        public function add_front_banners(){
            return view('backend.frontbanner.add_banner');
        }
// ==================== banner store ====================
        public function store_front_banners(Request $request){
                    $request->validate([
                    'banner' =>'required|image|mimes:jpg,png,jpeg,svg,webp|max:5240',
                    ],[
                    'banner.required' => 'Please select banner photo',
                    ]);
                if ($request->file('banner')) {
                        $image = $request->file('banner');
                        $name_gen =hexdec(uniqid()).'.'.$image->getClientOriginalExtension();
                        Image::make($image)->fit(1600,676)->save(public_path('upload/banner/'.$name_gen));
                        $save_url = 'upload/banner/'.$name_gen;
                        $storebanner = new FrontBanner();
                        $storebanner->banner =$save_url;
                        $storebanner->title =$request->title;
                        $storebanner->discription =$request->discription;
                        $storebanner->save();
                            $notification = array(
                                'message' => 'Site Banner image published successfully',
                                'alert-type' => 'success'
                            );
                return  redirect()->route('view.front.banners')->with($notification);
                }else{
              
                        $storebanner = new FrontBanner();
                        $storebanner->title =$request->title;
                        $storebanner->banner =$request->discription;     
                        $storebanner->save();
                            $notification = array(
                                'message' => 'Site Banner text published successfully',
                                'alert-type' => 'success'
                            );
                return  redirect()->route('view.front.banners')->with($notification);
            }
        }
// ==================== edit banner ====================
        public function edit_front_banner($id){
            $data['edit_banner'] =FrontBanner::find($id);
            return view('backend.frontbanner.edit_banner',$data);
        }
//====================  Update front end banner image ==================== 
        public function update_front_banners(Request $request, $id){
                        $old_image = $request->banner_old_image;
                        // dd($old_image);
                        if ($request->file('banner')) {         
                        $image = $request->file('banner');
                        $name_gen =hexdec(uniqid()).'.'.$image->getClientOriginalExtension();
                        Image::make($image)->resize(1600,676)->save('upload/banner/'.$name_gen);
                        $save_url = 'upload/banner/'.$name_gen;
                        unlink($old_image);
                        $data =	FrontBanner::find($id);
                        $data->title = $request->title;
                        $data->discription =$request->discription;
                        $data->banner =$save_url;
                        $data->save();
                        $notification = array(
                    'message' => ' updated  successfully',
                    'alert-type' => 'info'
                );
                    return redirect()->route('view.front.banners')->with($notification);

                        }else{
                        $data =	FrontBanner::find($id);
                        $data->title = $request->title;
                        $data->discription =$request->discription;
                        $data->save();
                        $notification = array(
                    'message' => ' Name updated successfully',
                    'alert-type' => 'info'
                );
                    return redirect()->route('view.front.banners')->with($notification);
                        }
        }
//delete banner image from front end 
        public function delete_front_banner($id){
                $bannerimage = FrontBanner::find($id);
                $old_banner_image =$bannerimage->banner;
                // dd($old_banner_image);
                   if (file_exists($old_banner_image)) 
                { 
                    unlink($old_banner_image); 
                }
                FrontBanner::find($id)->delete();
                $notification = array(
                    'message' => 'Site Banner Deleted successfully',
                    'alert-type' => 'error'
                );
        return  redirect()->route('view.front.banners')->with($notification);
        }

}
