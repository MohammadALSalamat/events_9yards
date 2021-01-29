<?php

namespace App\Http\Controllers;

use App\Models\Information;
use Illuminate\Http\Request;

class ReportController extends Controller
{
    //admin side show the reports page
    public function viewReports()
    {
        # get all reports from information table

        $view_reports = Information::get();
        return view('Back-End.Reports.view_reports', compact('view_reports'));
    }
}
