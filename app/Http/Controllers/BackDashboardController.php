<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class BackDashboardController extends Controller

{
    public function __construct()
    {
        $this->middleware('admin');
    }

    //start the login page
    public function login_page(Request $request)
    {
        if ($request->isMethod('post')) {
            $data = $request->all();
            // check if the user exist in database
            $checkName = User::where(['name' => $data['username'], 'status' => 1])->count();
            if ($checkName === 1) {
                //if then name is there then check on password
                //security password
                $password =  md5($data['pass']);
                $IsPasswordCorrect = User::where(['name' => $data['username'], 'password' => $password])->count();
                if ($IsPasswordCorrect === 1) {
                    // store the username in session to use it later
                    $request->session()->put('UserId', $data['username']); // register the username
                    return redirect('/dashboard');
                } else {
                    return redirect('/admin')->with('error', "Invaild Password");
                }
            } else {
                return redirect('/admin')->with('error', "Invaild Username");
            }
        }
        return view('Back-End.admin-login');
    }

    public function dashboard()
    {
        return view('Back-End.dashboard');
    }

    //logout
    //logout page to destroy every thing and then log out

    public function logout()
    {
        return redirect('/admin')->with('success', 'Thank you For using our Admin Panel... ');
    }
}
