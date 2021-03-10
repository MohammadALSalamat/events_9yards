<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Brian2694\Toastr\Facades\Toastr;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function view_category()
    {
        # view the main category
        $Categories = Category::get();
        return view('Back-End.Category.view_Category',compact('Categories'));
    }
    public function add_category()
    {
        return view('Back-End.Category.Add_Category');

    }
    public function insert_category(Request $request)
    {
        $data = $request->all();
        if(empty($data['category'])){
            Toastr::error("Sorry, your Category must be not empty","Error");
            return back();
        }
        if(empty($data['status'])){
            $status = 0;
        }else{
            $status = 1;
        }
        $newCat  =  new Category();
        $newCat-> name = $data['category'];
        $newCat-> status = $status;
        $newCat->save();
        Toastr::success("Congrats, your Category has been Added","Success");
        return back();


    }

    public function edit_category($id)
    {
        $findid = Category::find($id);

        if(empty($findid)){
            Toastr::error("Sorry, this ID is not found","Error");
            return redirect()->route('view_category');
                }
        $edit_category = Category::where('id',$id)->first();
        return view('Back-End.Category.edit_category',compact('edit_category'));

    }

    public function update_category(Request $request , $id)
    {
        $findid = Category::find($id);

        if(empty($findid)){
            Toastr::error("Sorry, this ID is not found","Error");
            return redirect()->route('view_category');
                }else{
             # update single category
        $data = $request->all();
        if(empty($data['category'])){
            Toastr::error("Sorry, your Category must be not empty","Error");
            return back();
        }
        if(empty($data['status'])){
            $status = 0;
        }else{
            $status = 1;
        }
        Category::where('id',$id)->update([
            'name'=>$data['category'],
            'status'=>$status
        ]);
        Toastr::success("Congrats, your Category has been Updated","Success");
        return redirect()->route('view_category');
    }


    }
    public function delete_category($id)
    {
        $findid = Category::find($id);

        if(empty($findid)){
            Toastr::error("Sorry, this ID is not found","Error");
            return redirect()->route('view_category');
        }
        Category::where('id',$id)->delete();

    }
}
