<?php

namespace App\Http\Controllers;

use App\Models\PartnerImages;
use App\Models\PartnerSection;
use Brian2694\Toastr\Facades\Toastr;
use Faker\Provider\File;
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;

class PartnerSectionController extends Controller
{
    //view projects
public function view_partners()
{

    $Projects = PartnerSection::with('partenerImages')->get(); // get the list of sections and images that have related with
    return view('Back-End.Home-Page.partners.view_partners' ,compact("Projects"));

}

    //add projects

    public function add_partners(Request $request)
    {
        if(empty($request->status)){
            $status = 0;
        }else{
            $status = 1;
        }
        # add projects
        if($request->hasFile('filename')){
            $image = $request->file('filename');
            $extentions = $image->clientExtension();
            $name = rand(1, 10000000) . '.' . $extentions;
            $path ='img/projects/'.$name;
            Image::make($image)->save($path);
        }
        //insert the data
        $uplode_model = new PartnerImages();
        $uplode_model->sec_id = $request->section;
        $uplode_model->Image =$name;
        $uplode_model->status = $status;
        $uplode_model->save();
        Toastr::success('Congrats, your data has been updated ', 'Success');
        return back();
    }

    // view edite single image

    public function Edite_partners(Request $request,$id)
    {
        $Projects = PartnerImages::with('PartnersSections')->where('id',$id)->first();
        $project_section =PartnerSection::where('id',$Projects->sec_id)->first();
        //check the array if there is any value then change it

    return view('Back-End.Home-Page.partners.Edit_Single_partner',compact('Projects','project_section'));
    }


    public function update_partners(Request $request,$id)
    {
        $Projects = PartnerImages::with('PartnersSections')->where('id',$id)->first();
        # add projects
        if(empty($request->status)){
            $status = 0;
        }else{
            $status = 1;
        }
        $usersImage = public_path("img/projects/{$Projects->Image}"); // get previous image from folder
        if(!empty($request->hasFile('filename'))){
            if(file_exists($usersImage)) { // unlink or remove previous image from folder
                unlink($usersImage);
            }
        if($request->hasFile('filename')){
            if($request->hasFile('filename')){
                $image = $request->file('filename');
                $extentions = $image->clientExtension();
                $name = rand(1, 10000000) . '.' . $extentions;
                $path ='img/projects/'.$name;
                Image::make($image)->save($path);
            }
        }
         }else{
            $name = $request->Current_Iamge;

        }

        PartnerImages::where('id',$id)->update([
            'Image'=>$name,
            'status'=>$status,
        ]);
        Toastr::success('you have updated the image ', 'Success');
        return back();

    }
}
