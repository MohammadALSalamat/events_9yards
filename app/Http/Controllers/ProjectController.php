<?php

namespace App\Http\Controllers;

use App\Models\Project;
use Brian2694\Toastr\Facades\Toastr;
use Illuminate\Http\Request;
use Illuminate\Support\Str;


class ProjectController extends Controller
{

//view projects
public function view_projects()
{
    $Projects = Project::with(['project'])->get();
    return view('Back-End.Home-Page.projects.view_projects' ,compact("Projects"));

}

    //add projects

    public function add_projects(Request $request)
    {
        # add projects
        if($request->hasFile('filename')){
            foreach($request->file('filename') as $image){
                $extentions = $image->clientExtension();
                $name = rand(1, 10000000) . '.' . $extentions;
                $image->move(public_path().'/img/projects/',$name); //file Name
                $data[] =$name;
            }
        }
        //insert the data
        $uplode_model = new Project();
        $uplode_model->Images =json_encode($data);
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
         # add projects
        //  if($request->hasFile('filename')){
        //     foreach($request->file('filename') as $image){
        //         $extentions = $image->clientExtension();
        //         $name = rand(1, 10000000) . '.' . $extentions;
        //         $image->move(public_path().'/img/projects/',$name); //file Name
        //         $data[] =$name;
        //     }
        // }else{
        //     Toastr::error('can not update this image until you insert new data', 'Error');
        //     return back();

        // }
        //insert the da
        $Projects = Project::where('id',$id)->first();
            $find_image = Project::find($request->Images[$item]);
            dd($find_image);
        //check the array if there is any value then change it
        $checkifImage = Str::contains($Projects->Images, $item);
        if($checkifImage == true){
        foreach ((array)json_decode($Projects->Images) as $test){
            if($test == $item){
                $test1 = Project::where(['id'=>$id])->array('Images');
                dd($test1);
                // // $replace = str_replace($test,(array)json_encode($data) ,(array)json_decode($Projects->Images) );
                // dd($replace);
                // Project::where(['id'=>$id])->update([
                //     'Images' => $replace
                // ]);
            }
        }
        }else{
        Toastr::error('Sorry This Image is not Exists', 'Error');
        return back();
        }
    }
}
