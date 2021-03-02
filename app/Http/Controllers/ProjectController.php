<?php

namespace App\Http\Controllers;

use App\Models\Project;
use Brian2694\Toastr\Toastr;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
    //add projects

    public function add_projects(Request $request)
    {
        # add projects
        $this->validate($request,[
            'filename'=>'required',
            'filename'=>'image|mimes:jpg,png,gif,svg'
        ]);
        dd($request->all());
        if($request->hasFile('filename')){
            foreach($request->file('filename') as $image){
                $name = $image->getClientOrginalName();
                $image->move(public_path().'/img/projects/',$name); //file Name
                $data[] =$name;
            }
        }
        dd($name);
        //insert the data
        $uplode_model = new Project();
        $uplode_model->Images =json_encode($data);
        $uplode_model->save();
        Toastr::success('Congrats, your data has been updated ', 'Success');
        return back();
    }
}
