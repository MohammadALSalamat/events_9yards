<?php

namespace App\Http\Controllers;

use App\Models\leadingPage;

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
}
