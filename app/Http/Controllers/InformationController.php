<?php

namespace App\Http\Controllers;

use App\Models\FrontUser;
use Illuminate\Http\Request;
use Brian2694\Toastr\Facades\Toastr;
use App\Http\Requests\InfoValidation;
use App\Http\Requests\MailValidation;
use App\Mail\RandomMail;
use App\Models\Information;
use App\Models\User;
use Illuminate\Support\Facades\Mail;

class InformationController extends Controller
{
    // get the data from user to check it before submistion
    public function Insert_Info(InfoValidation $request)
    {
        if ($request->isMethod('post')) {
            $data = $request->all();
            $Author = FrontUser::where('id', $data['Current_UserId'])->first();
            $ridOfDash = explode('-', $data["phone"]);
            $RealPhone = join($ridOfDash);
            // validation
            if (empty($data['status'])) {
                $status = 0;
            } else {
                $status = 1;
            }
            if (empty($data['username'])) {
                Toastr::error('Please Name Can not be empty', 'Error');
                return back();
            }
            if (empty($data['description'])) {
                Toastr::error('Please description Can not be empty', 'Error');
                return back();
            }
            if (empty($data['email'])) {
                Toastr::error('Please email Can not be empty', 'Error');
                return back();
            }



            // //get the avatar path to save it
            // if (!empty($data['avatar'])) {
            //     if ($request->hasFile('avatar')) {
            //         $temp_image = $request->file('avatar');
            //         if ($temp_image->isValid()) {
            //             $extentions = $temp_image->clientExtension();
            //             $fileName = rand(1, 10000000) . '.' . $extentions;
            //             $avatar_path = 'admin-style/admin-images/' . $fileName;
            //             Image::make($temp_image)->resize(250, 250)->save($avatar_path);
            //             $request->session()->put('Image_Path', $fileName);
            //         }
            //     } else {
            //         $fileName = $data['currnt_image'];
            //     }
            // } else {
            //     $fileName = $data['currnt_image'];
            // }




            // // insert data after validation
            $InsertData = new Information();
            $InsertData->Author = $Author->name;
            $InsertData->name = $data['username'];
            $InsertData->phone = $RealPhone;
            $InsertData->email = $data['email'];
            $InsertData->description = $data['description'];
            $InsertData->status = $status;
            $InsertData->save();
            Toastr::success('Congrats you have Add a new Data', 'Success');
            return back();
        } else {
            return 'false';
        }
    }
    // send email

    public function sendEmail(Request $request)
    {
        $data = $request->all();
        //send email to all users
        if ($data['add_fields_placeholder'] == 'All') {
            $users = User::get();
            foreach ($users as $user) {
                Mail::to($user->email)->cc($data['emailcc'])->send(new RandomMail());
            }
        }
        //send email to one user
        if ($data['add_fields_placeholder'] == 'one') {
            Mail::to($data['emailto'])->cc($data['emailcc'])->send(new RandomMail());
        }
        Toastr::success('Congrats your Email has been sent', 'Success');
        return back();
    }
}
