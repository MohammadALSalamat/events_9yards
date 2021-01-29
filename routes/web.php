<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FrontIndexController;
use App\Http\Controllers\BackDashboardController;
use App\Http\Controllers\InformationController;
use App\Http\Controllers\ReportController;
use App\Http\Controllers\UserSection;
use App\Mail\RandomMail;
use App\Models\Information;
use Illuminate\Support\Facades\Mail;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Auth::routes();

//Back end controllers
Route::match(['get', 'post'], '/admin', [BackDashboardController::class, 'login_page'])->name('login_page');

// log out
Route::get('/logout', [BackDashboardController::class, 'logout'])->name('logout');
// security part start thr admin panel page.
Route::group(['middleware' => ['admin']], function () {
    /*+++++++++++++++++++++++++++++++ Start the user Routs +++++++++++++++++++++++++++*/

    // show the dashboard
    Route::get('/dashboard', [BackDashboardController::class, "dashboard"])->name('dashboard');
    // user section
    Route::get('/users_section/View', [UserSection::class, 'view_users'])->name('view_users');
    Route::get('/users_section/Add', [UserSection::class, 'Add_users'])->name('Add_users');
    Route::post('/users_section/Add_user', [UserSection::class, 'Store_users'])->name('Insert_users');
    //user sittings
    Route::get('/profile', [UserSection::class, 'sittings'])->name('sittings');
    // check the password validate
    Route::get('/admin/check-pwd', [UserSection::class, 'changPass']);
    Route::patch('/admin/update_password', [UserSection::class, 'update_password'])->name('update_password');
    //update prodile username
    Route::match(['get', 'post'], '/admin/update_profile/{id]', [UserSection::class, 'update_profile'])->name('update_profile');
    // delete the user
    Route::match(['get', 'post'], '/admin/user/{id}', [UserSection::class, 'Delete_user']);
    // modify the user
    Route::get('users/Edit/{id}', [UserSection::class, 'Edit_user'])->name('Edit_user');
    Route::post('Edit/{id}', [UserSection::class, 'Modify_user']);

    // show the banuser page
    Route::get('user/banned', [UserSection::class, "banned_user"])->name('ban_users');

    /*+++++++++++++++++++++++++++++++ End  the user Routs +++++++++++++++++++++++++++*/


    /*+++++++++++++++++++++++++++++++ Start  the report Routs +++++++++++++++++++++++++++*/

    Route::get('/reports', [ReportController::class, 'viewReports'])->name('Show_Reports');

    /*+++++++++++++++++++++++++++++++ End  the report Routs +++++++++++++++++++++++++++*/
});



/*+++++++++++++++++++++++++++++++ Start  the Front End Routs +++++++++++++++++++++++++++*/

// Route::match(['get', 'post'], '/', [FrontIndexController::class, 'Front_Page'])->name('Front_Page');
// Route::group(['middleware' => ['front']], function () {


//front end controllers

Route::get('/', [FrontIndexController::class, 'main_page'])->name('main_page');
Route::get('/Email', [FrontIndexController::class, 'email_page'])->name('email_page');
Route::get('/new_data', [FrontIndexController::class, 'new_data'])->name('new_data');

/*+++++++++++++++++++++++++++++++ End  the Front End Routs +++++++++++++++++++++++++++*/


// get the data from the user and send it to information table
Route::post('/Informations', [InformationController::class, 'Insert_Info'])->name('Insert_Info');

// send email to user

Route::match(['get', 'post'], '/send_email', [InformationController::class, 'sendEmail'])->name('send_email');










    // });

//test mail sender

// Route::get('/newemail', function () {
//     Mail::to('alomda.alslmat@gmail.com')->send(new RandomMail());
//     return new RandomMail();
// });
