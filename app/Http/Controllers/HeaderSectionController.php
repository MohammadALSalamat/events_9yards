<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\headerSection;
use Brian2694\Toastr\Facades\Toastr;
use Intervention\Image\Facades\Image;
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
    // add slideshow section
    public function HeaderSlideshowSection()
    {
        return view('Back-End.Home-Page.HeaderSections.add_new_slideshow');
    }
    public function insert_slider_image(Request $request)
    {
        # insert the data
        $data = $request->all();
        if (empty($data['status'])) {
            $status = 0;
        } else {
            $status = 1;
        }
        if (empty($data['status'])) {
            Toastr::error(' Sorry !! image can not be empty!!!', 'Error');
            return back();
        }
        // save the image
        if ($request->hasFile('avatar')) {
            $temp_image = $request->file('avatar');
            if ($temp_image->isValid()) {
                $extentions = $temp_image->clientExtension();
                $fileName = rand(1, 10000000) . '.' . $extentions;
                $avatar_path = 'admin-style/sliders/header_slideshow/' . $fileName;
                Image::make($temp_image)->resize(1300, 700)->save($avatar_path);
                $request->session()->put('Image_Path', $fileName);
            }
        }

        $newdata = new headerSlideshowSection();
        $newdata->slideshow = $fileName;
        $newdata->status = $status;
        $newdata->save();
        Toastr::success('Congrats!! You have Add Slider to your header section.', 'Success');
        return back();
    }
        // modify the slideshow
        public function EditSlideShow($id)
        {
            # view the section 
            $Slide_show = HeaderSlideshowSection::where('id',$id)->first();
            return view('Back-End.Home-Page.HeaderSections.Edit_Sildshow_section',compact('Slide_show'));
        }

        // update the upadte_EditSlideShow
        public function upadte_EditSlideShow(Request $request, $id)
        {
            # update the contect
            $data = $request->all();
            if(empty($data['avatar'])){
                $fileName = $data['current_image'];
            }else{
                if ($request->hasFile('avatar')) {
                    $temp_image = $request->file('avatar');
                    if ($temp_image->isValid()) {
                        $extentions = $temp_image->clientExtension();
                        $fileName = rand(1, 10000000) . '.' . $extentions;
                        $avatar_path = 'admin-style/sliders/header_slideshow/' . $fileName;
                        Image::make($temp_image)->resize(1300, 700)->save($avatar_path);
                        $request->session()->put('Image_Path', $fileName);
                    }
                }
            }
            if (empty($data['status'])) {
                $status = 0;
            } else {
                $status = 1;
            }
            HeaderSlideshowSection::where('id',$id)->update([
                'slideshow'=>$fileName,
                'status'=>$status
            ]);
            Toastr::success('Congrats!! You have Add Slider to your header section.', 'Success');
            return back();
        }

    // deleted the slide show from your view

    public function DeleteSlideShow($id)
    {
        $slider_by_id = headerSlideshowSection::where('id',$id)->first();
        if(empty($slider_by_id)){
            Toastr::error(' Sorry !! This slide show is not found !!!', 'Error');
            return redirect(route('View_Header_Section'));
        }
        headerSlideshowSection::where('id',$id)->delete();
        Toastr::warning('Congrats!! You have deleted the Slider!!!', 'Warning');
        return back();
    }
}
