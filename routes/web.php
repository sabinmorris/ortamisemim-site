<?php

use App\Http\Controllers\Admin\AboutUsController;
use App\Http\Controllers\Admin\AnouncementController;
use App\Http\Controllers\Admin\GeneralUpdateController;
use App\Http\Controllers\Admin\MinisterController;
use App\Http\Controllers\Admin\PostController;
use App\Http\Controllers\Admin\SlideController;
use App\Http\Controllers\Auth\ChangePasswordController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PagesController;

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

// Route::get('/', function () {
//     return view('index');
// })->name('about_home');
Route::get('/', [PagesController::class, 'homePage'])->name('/');
Route::get('kuhusu-sisi', [PagesController::class, 'aboutUs'])->name('about_Us');
Route::get('habari-matukio', [PagesController::class, 'newsevents'])->name('events');
Route::get('wasiliana-nasi', [PagesController::class, 'contactUs'])->name('contact_Us');
Route::get('maktaba-ya-video', [PagesController::class, 'videoLibrary'])->name('video_Lebo');
Route::get('maktaba-ya-picha', [PagesController::class, 'photoLibrary'])->name('photo_Lebo');
Route::get('soma-zaidi/{id}', [PagesController::class, 'readmorepost'])->name('read_more');
Route::get('kuhusu-sisi-zaidi', [PagesController::class, 'readmoreabout'])->name('read_more_about');
Route::get('uongozi', [PagesController::class, 'leadership'])->name('our_leadership');
Route::get('utumishi-uendeshaji', [PagesController::class, 'utumishidepartment'])->name('utumishi_department');

Auth::routes();

Route::get('/admin-dashboard', [App\Http\Controllers\HomeController::class, 'index'])->name('admin-dashboard');

Route::get('users', [HomeController::class, 'viewusers'])->name('user_view');
Route::get('user-profile/{id}', [HomeController::class, 'showuser'])->name('show_user');
Route::get('edit-user', [HomeController::class, 'edituser'])->name('user_edit');
Route::post('update-user', [HomeController::class, 'updateuser'])->name('user_update');
Route::post('user-status', [HomeController::class, 'updateuserstatus'])->name('update_user_status');//For user status only using toggle button
Route::get('change-password', [ChangePasswordController::class, 'passwordform'])->name('changepswd_update');
Route::post('password-change', [ChangePasswordController::class, 'updatepassword'])->name('update_password');

//Routes for Slides
Route::resource('image-slide', SlideController::class);
Route::post('slide-status', [GeneralUpdateController::class, 'updateslidestatus'])->name('update_slide_status');
Route::post('slide-image', [GeneralUpdateController::class, 'updateslide'])->name('update_slide');

//Routes for Posts 
Route::resource('admin-post', PostController::class);
Route::post('post-status', [GeneralUpdateController::class, 'updatepoststatus'])->name('update_post_status');
Route::post('post-upadte', [GeneralUpdateController::class, 'updatepost'])->name('update_post');

//Route for Special Anouncement
Route::resource('admin-anouncement', AnouncementController::class);
Route::post('anouncement-status', [GeneralUpdateController::class, 'updateanouncementstatus'])->name('update_anouncement_status');
Route::post('anouncement-update', [GeneralUpdateController::class, 'updateanounce'])->name('update_anouncement');

//Route for Minister Description
Route::resource('minister-description', MinisterController::class);
Route::post('minister-status', [GeneralUpdateController::class, 'updateministerstatus'])->name('update_minister_status');
Route::post('minister-update', [GeneralUpdateController::class, 'updateministerdescription'])->name('update_minister_description');
Route::get('/storage-link', function(){
    $storagFolder = storage_path('app/public');
    $linkFolder = $_SERVER['DOCUMENT_ROOT']. '/storage';
    symlink($storagFolder, $linkFolder);
});
//Route for About us info
Route::resource('about-us', AboutUsController::class);
Route::post('aboutus-status', [GeneralUpdateController::class, 'updateaboutstatus'])->name('update_about_staus');
Route::post('about-us-update', [GeneralUpdateController::class, 'updateboutus'])->name('update_about_us');


