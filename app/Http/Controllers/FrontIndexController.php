<?php

namespace App\Http\Controllers;

use App\Models\FrontUser;
use App\Models\headerSection;
use App\Models\headerSlideshowSection;
use App\Models\HomePage;
use App\Models\leadingPage;
use App\Models\Project;
use Illuminate\Http\Request;

class FrontIndexController extends Controller
{
    //start the login page
    public function Front_Page(Request $request)
    {
        if ($request->isMethod('post')) {
            $data = $request->all();
            // check if the user exist in database
            $checkName = FrontUser::where(['name' => $data['username'], 'status' => 1, 'is_active' => 1])->count();
            if ($checkName === 1) {
                //if then name is there then check on password
                //security password
                $password =  md5($data['pass']);
                $IsPasswordCorrect = FrontUser::where(['name' => $data['username'], 'password' => $password])->count();
                if ($IsPasswordCorrect === 1) {
                    // store the username in session to use it later
                    $request->session()->put('FrontUserID', $data['username']); // register the username
                    return redirect()->route('main_page');
                } else {
                    return redirect('/')->with('error', "Invaild Password");
                }
            } else {
                return redirect('/')->with('error', "Invaild Username");
            }
        }
        return view('Front-End.user-login');
    }
    //start with main page


    public function main_page(Request $request)
    {
        $CurrentUser = FrontUser::where(['name' => $request->session()->get('FrontUserID')])->first();
        $logo_detaile = HomePage::first(); // logo
        $headerTitles = headerSection::first(); // get the titles
        $headerSlideShows = headerSlideshowSection::get(); // get the slideShow images
        $leading_info = leadingPage::first();//leading page section
        $Projects = Project::with(['project'])->get(); // get projects section images

        return view('layouts.front-layout.main_desgin', compact('CurrentUser', "logo_detaile", "headerTitles", "headerSlideShows","leading_info","Projects"));
    }


    // send email page

    public function email_page()
    {
        #show the email page
        return view('Front-End.EmailPage.email_page');
    }
    public function new_data(Request $request)
    {
        $CurrentUser = FrontUser::where(['name' => $request->session()->get('FrontUserID')])->first();


        #show the email page
        return view('Front-End.data.insert_newdata', compact('CurrentUser'));
    }


    // Front Header Section Show detailes
}
