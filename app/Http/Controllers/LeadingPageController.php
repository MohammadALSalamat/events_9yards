<?php

namespace App\Http\Controllers;

use App\Models\leadingPage;
use Brian2694\Toastr\Facades\Toastr;
use Illuminate\Http\Request;

class LeadingPageController extends Controller
{
    // view the leading  page.
    public function View_leading_page()
    {
        $leading_page_info =leadingPage::get();
        $titles_info = leadingPage::first();
        return view('Back-End.Home-Page.Leading page.view_leading_page',compact('leading_page_info','titles_info'));
    }

    // change the text in leanding page
    public function ChnageTextLeangingPage(Request $request , $id)
    {
        # get the data from the database

        $data = $request->all();
        if(empty($data['top_title'])){
            Toastr::error('Sorry , your Data must be not empty)', 'Error');
            return back();
        }
        if(empty($data['description'])){
            Toastr::error('Sorry , your Data must be not empty)', 'Error');
            return back();
        }
        if(empty($data['status'])){
           $status = 0;
        }else{
            $status = 1;
        }
        dd($data);
        // upgrade our database
        leadingPage::where('id',$id)->update([
            'title'=>$data['top_title'],
            'paragraph'=>$data['description'],
            'Status'=>$status
        ]);
        Toastr::success('Sorry , your Data must be not empty)', 'Success');
            return back();
    }
}
