<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FrontIndexController;
use App\Http\Controllers\BackDashboardController;
use App\Http\Controllers\LeadingPageController;
use App\Http\Controllers\HeaderSectionController;
use App\Http\Controllers\InformationController;
use App\Http\Controllers\PartnerSectionController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\ReportController;
use App\Http\Controllers\UserSection;
use App\Mail\RandomMail;
use App\Models\Information;
use App\Models\PartnerSection;
use Illuminate\Support\Facades\Mail;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;

use function Ramsey\Uuid\v1;

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


    /*+++++++++++++++++++++++++++++++ Start  the HomePage Routs +++++++++++++++++++++++++++*/

    Route::get("/Change-logo", [\App\Http\Controllers\HomePageController::class, "modify_logo_homepage"])->name("Change_logo"); // logo detailes
    Route::post("/Edit-logo", [\App\Http\Controllers\HomePageController::class, "Edit_logo"])->name("Edit_logo"); // logo Edit


    // Header Sections
    Route::get('/header_section', [HeaderSectionController::class, 'HeaderSection'])->name('View_Header_Section'); // view both slideshow and titles
    Route::get('/Edit_titles/{id}', [HeaderSectionController::class, 'Edit_Titles'])->name('Edit_Titles'); // view both slideshow and titles
    Route::post('/Update_Edit_Titles/{id}', [HeaderSectionController::class, 'Update_Edit_Titles'])->name('Update_Edit_Titles'); // view both slideshow and titles

    // header slider section
    Route::get('/header_slider_section', [HeaderSectionController::class, 'HeaderSlideshowSection'])->name('Add_slideShow'); // view both slideshow and titles
    Route::post('/insert_slider_image', [HeaderSectionController::class, 'insert_slider_image'])->name('insert_slider_image'); // view both slideshow and titles
    Route::get('/EditSlideShow/{id}', [HeaderSectionController::class, 'EditSlideShow'])->name('EditSlideShow'); // edit slideshow image
    Route::post('/EditSlideShow/{id}', [HeaderSectionController::class, 'upadte_EditSlideShow'])->name('upadte_EditSlideShow'); // edit slideshow image
    Route::match(['get','post'],'admin/slideshow/{id}',[HeaderSectionController::class , 'DeleteSlideShow'])->name('Delete_slideshow'); // delete the

    // leading page
    Route::get('/View_leading_page', [LeadingPageController::class , 'View_leading_page'])->name('View_leading_page');
    Route::match(['get', 'post'],'/Update_leading_page/{id}',[LeadingPageController::class,'ChnageTextLeangingPage'])->name('Edit_leading_page');

    //prjects
    Route::get('View-Projects',[ProjectController::class,'view_projects'])->name('view_projects');
    Route::post('/add_projects',[ProjectController::class,'add_projects'])->name('add_projects');
    Route::get('/Edite_Project/{id}',[ProjectController::class,'Edite_Project'])->name('Edite_Project');
    Route::post('/update_Project_Project/{id}',[ProjectController::class,'update_Project'])->name('update_Project');

    //Partners

    Route::get('/view-Prteners',[PartnerSectionController::class,'view_partners'])->name('view_partners');
    Route::post('/add_partners',[PartnerSectionController::class,'add_partners'])->name('add_partners');
    Route::get('/Edite_partners/{id}',[PartnerSectionController::class,'Edite_partners'])->name('Edite_partners');
    Route::post('/update_partners/{id}',[PartnerSectionController::class,'update_partners'])->name('update_partners');
    /*+++++++++++++++++++++++++++++++ End  the HomePage Routs +++++++++++++++++++++++++++*/
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
Route::get('/projects', function () {
    return view('Front-End.Projects.view_all_projects');
});

// send email to user

Route::match(['get', 'post'], '/send_email', [InformationController::class, 'sendEmail'])->name('send_email');










    // });

//test mail sender

// Route::get('/newemail', function () {
//     Mail::to('alomda.alslmat@gmail.com')->send(new RandomMail());
//     return new RandomMail();
// });
