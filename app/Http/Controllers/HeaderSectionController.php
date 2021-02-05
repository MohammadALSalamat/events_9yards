<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\headerSection;
use Brian2694\Toastr\Facades\Toastr;
use App\Models\headerSlideshowSection;

class HeaderSectionController extends Controller
{
    //create a headerSection
    public function HeaderSection()
    {
        $title_sections = headerSection::get();
        $slideshow_section = headerSlideshowSection::get();
        return view('Back-End.Home-Page.HeaderSections.view_header_sections', compact('title_sections', 'slideshow_section'));
    }
    public function Edit_Titles(Request $request, $id)
    {
        $Titles = headerSection::where("id", $id)->first();
        return view('Back-End.Home-Page.HeaderSections.Edit_Title_section', compact('Titles'));
    }
    public function Update_Edit_Titles(Request $request, $id)
    {
        $data = $request->all();
        if ($request->isMethod("post")) {
            if (empty($data['top_title']) || empty($data['bottom_title']) || empty($data['description'])) {
                Toastr::error('There is an error with your Info', 'Error');
                return back();
            }
            if (empty($data['status'])) {
                $status = 0;
            } else {
                $status = 1;
            }
            headerSection::where('id', $id)->update([
                'top_title' => $data['top_title'],
                'bottom_title' => $data['bottom_title'],
                'paragraph' => $data['description'],
                'status' => $status
            ]);
            Toastr::success('Congrats!! You have Edit Your Titles.', 'Success');
            return back();
        }
    }
}
