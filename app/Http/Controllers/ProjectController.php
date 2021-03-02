<?php

namespace App\Http\Controllers;

use App\Models\Project;
use Brian2694\Toastr\Facades\Toastr;
use Illuminate\Http\Request;

class ProjectController extends Controller
{

//view projects
public function view_projects()
{
    #get the projects view
    $images = Project::get();
    return view('Back-End.Home-Page.projects.view_projects',compact('images'));
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
}
