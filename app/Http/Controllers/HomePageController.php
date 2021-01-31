<?php

namespace App\Http\Controllers;

use App\Models\HomePage;
use App\Models\User;
use Brian2694\Toastr\Facades\Toastr;
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;

class HomePageController extends Controller
{
    // view the logo to modify it
    function modify_logo_homepage(Request $request){
        $current_logo =HomePage::first();
        $username = $request->session()->get('UserId');
        $get_user_info = User::where(['name' => $username])->first();

       return view('Back-End.Home-Page.change_logo_top_navbar',compact('current_logo','get_user_info'));
    }

    function Edit_logo(Request $request){
        $data = $request->all();
        if ($data['status'] == "on"){
            $status = 1;
        }else{
            $status = 0;
        }
        // modify
        if (!empty($data['logo'])) {
                 if ($request->hasFile('logo')) {
                     $temp_image = $request->file('logo');
                     if ($temp_image->isValid()) {
                         $extentions = $temp_image->clientExtension();
                         $fileName = rand(1, 10000000) . '.' . $extentions;
                         $avatar_path = 'logo/' . $fileName;

                         Image::make($temp_image)->resize(250, 250)->save($avatar_path);
                         $request->session()->put('Image_Path', $fileName);
                     }
                 }
             } else {
              Toastr::error('Sorry your Image is not inserted ,Please try again :)', 'Error');
              return back();
             }
            HomePage::where("id",$data['current_logo'])->update([
                "logo" => $fileName,
                "Puplished" => $status
            ]);
        Toastr::success('Congrats , you have updated the Home page Logo)', 'Success');
        return back();

    }
}
