<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;
use Brian2694\Toastr\Facades\Toastr;
use Intervention\Image\Facades\Image;


class ProductController extends Controller
{
    public function view_Product()
    {
        # view the main Product
        $Products = Product::with('Category')->get();
        $Category = Category::with('Products')->get();
        dd($Category);

        return view('Back-End.Product.view_Product',compact('Products','Category'));
    }
    public function add_Product()
    {
        $Category = Category::get();
        return view('Back-End.Product.Add_Product' , compact('Category'));

    }
    public function insert_Product(Request $request)
    {
        $data = $request->all();
        if($data['category'] == 0){
            Toastr::error("Sorry, your Category must be not empty","Error");
            return back();
        }
        if(empty($data['Product'])){
            Toastr::error("Sorry, your Product must be not empty","Error");
            return back();
        }
        if(empty($data['slug'])){
            Toastr::error("Sorry, your slug must be not empty","Error");
            return back();
        }
        if(empty($data['status'])){
            $status = 0;
        }else{
            $status = 1;
        }
        if(empty($data['filename'])){
            Toastr::error("Sorry, your Image must be not empty","Error");
            return back();
        }
        # add projects
        if($request->hasFile('filename')){
            $image = $request->file('filename');
            $extentions = $image->clientExtension();
            $name = rand(1, 10000000) . '.' . $extentions;
            $path ='img/products/'.$name;
            Image::make($image)->save($path);
        }
        $newCat  =  new Product();
        $newCat-> cat_id = $data['category'];
        $newCat-> name = $data['Product'];
        $newCat-> name = $name;
        $newCat-> description = $data['description'];
        $newCat-> slug = $data['slug'];
        $newCat-> status = $status;
        $newCat->save();
        Toastr::success("Congrats, your Product has been Added","Success");
        return back();


    }

    public function edit_Product($id)
    {
        $findid = Product::find($id);

        if(empty($findid)){
            Toastr::error("Sorry, this ID is not found","Error");
            return redirect()->route('view_Product');
                }
        $edit_Product = Product::where('id',$id)->first();
        return view('Back-End.Product.edit_Product',compact('edit_Product'));

    }

    public function update_Product(Request $request , $id)
    {
        $findid = Product::find($id);

        if(empty($findid)){
            Toastr::error("Sorry, this ID is not found","Error");
            return redirect()->route('view_Product');
                }else{
             # update single Product
        $data = $request->all();
        if(empty($data['Product'])){
            Toastr::error("Sorry, your Product must be not empty","Error");
            return back();
        }
        if(empty($data['status'])){
            $status = 0;
        }else{
            $status = 1;
        }
        Product::where('id',$id)->update([
            'name'=>$data['Product'],
            'status'=>$status
        ]);
        Toastr::success("Congrats, your Product has been Updated","Success");
        return redirect()->route('view_Product');
    }


    }
    public function delete_Product($id)
    {
        $findid = Product::find($id);

        if(empty($findid)){
            Toastr::error("Sorry, this ID is not found","Error");
            return redirect()->route('view_Product');
        }
        Product::where('id',$id)->delete();

    }
}
