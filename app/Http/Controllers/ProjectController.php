<?php

namespace App\Http\Controllers;

use App\Models\Project;
use App\Models\ProjectImages;
use App\Models\ProjectSection;
use Brian2694\Toastr\Facades\Toastr;
use Illuminate\Http\Request;
use Illuminate\Support\Str;


class ProjectController extends Controller
{

//view projects
public function view_projects()
{

    $Projects = ProjectSection::with('projectImages')->get(); // get the list of sections and images that have related with
    return view('Back-End.Home-Page.projects.view_projects' ,compact("Projects"));

}

    //add projects

    public function add_projects(Request $request)
    {
        $data =$request->all();
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
            $image->move(public_path().'/img/projects/',$name); //file Name

        }
        //insert the data
        $uplode_model = new ProjectImages();
        $uplode_model->sec_id = $request->section;
        $uplode_model->Image =$image;
        $uplode_model->status = $status;
        $uplode_model->save();
        Toastr::success('Congrats, your data has been updated ', 'Success');
        return back();
    }

    // view edite single image

    public function Edite_Project(Request $request,$id,$item)
    {
        $Projects = Project::where('id',$id)->first();
        //check the array if there is any value then change it
        $checkifImage = Str::contains($Projects->Images, $item);
    return view('Back-End\Home-Page\projects\Edit_Single_project',compact('item','Projects'));
    }


    public function update_Project(Request $request,$id,$item)
    {
        $Projects = Project::where('id',$id)->first();
        # add projects
        if($request->hasFile('filename')){
            if($request->file('filename')->isValid()){
                $image = $request->file('filename');
                dd($image);
                $extentions = $image->clientExtension();
                $Newname = rand(1, 10000000) . '.' . $extentions;
                $image->move(public_path().'/img/projects/',$Newname); //file Name
                $data= $Newname;
                $checkifImage = Str::contains($Projects->Images, $item);
                if ($checkifImage == true) {
                    foreach ((array)json_decode($Projects->Images) as $key=> $test) {
                        if ($test == $item) {
                            // $repl = str_replace($item, $data);
                            // dd($repl);
                        }
                    }
                }
            }
        }else{
            Toastr::error('can not update this image until you insert new data', 'Error');
            return back();

        }
        $array1 = (array)json_decode($Projects->Images);
        $checkifImage = Str::contains($Projects->Images, $item);
        //check the array if there is any value then change it
        if($checkifImage == true){
        foreach ((array)json_decode($Projects->Images) as $key=> $test){
            if($test == $item){
                $repl = array_replace($test);
            }
        }
        }else{
        Toastr::error('Sorry This Image is not Exists', 'Error');
        return back();
        }
    }
}
