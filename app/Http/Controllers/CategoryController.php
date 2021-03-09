<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Brian2694\Toastr\Toastr;
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
        dd($data);
        if(empty($data['Category'])){
            Toastr::error("Sorry, your Category must be not empty","Error");
        }

    }
}
