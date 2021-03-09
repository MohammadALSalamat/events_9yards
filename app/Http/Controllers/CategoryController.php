<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function view_category()
    {
        # view the main category
        $Categories = Category::get();
        return view('Back-End.Category.view_Category',compact('Categories'));
    }
    public function add_category(Request $request)
    {
        # code...
    }
}
