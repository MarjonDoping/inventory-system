<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Basecontroller;
use App\Http\Controllers\Admincontroller;
use App\Http\Controllers\Pagecontroller;
use App\Http\Controllers\Postcontroller;
use App\Http\Controllers\Contactcontrol;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\FacultyController;
use App\Http\Controllers\siteController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\CustomerController;


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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', [Basecontroller::class,'home']);
Route::get('/company', [Basecontroller::class,'company']);
Route::get('/service', [Basecontroller::class,'services']);
Route::get('/contact', [Basecontroller::class,'contact']);
Route::get('/about', [Basecontroller::class,'about']);

Route::get('/admin', [Admincontroller::class,'index'])->name('login');
Route::post('/admin', [Admincontroller::class,'makeLogin']);

// Route::get('/dashboard', [Admincontroller::class,'dashboard']);

// Route::get('/contact', [Basecontroller::class,'contactSubmit'])->name('contact.submit');


// Route::group(['middleware' =>'auth:admin'],function(){
Route::get('/dashboard', [Admincontroller::class,'dashboard']);

Route::get('/page-add', [Pagecontroller::class,'AddPage'])->name('page-add');
	Route::get('/company-page-add', [Pagecontroller::class,'company'])->name('company.page.add');
	
	Route::post('/page-create', [Pagecontroller::class,'CreatePage'])->name('page-create');
	Route::get('/contact-page-add', [Pagecontroller::class,'contact'])->name('contact.page.add');
	//post routes
	Route::get('/post-show', [Postcontroller::class,'show'])->name('post-show');
	Route::get('/post-add', [Postcontroller::class,'create'])->name('post-add');
	Route::get('/post-edit/{post_id?}', [Postcontroller::class,'create'])->name('post-edit');
	Route::post('/post-add/{post_id?}', [Postcontroller::class,'store'])->name('post-store');
	Route::post('/post-delete', [Postcontroller::class,'delete'])->name('post-delete');


	
	//faculty post
	Route::get('/faculty-show', [FacultyController::class,'show'])->name('faculty-show');
	Route::get('/faculty-add', [FacultyController::class,'create'])->name('faculty-add');
	Route::get('/faculty-edit/{post_id?}', [FacultyController::class,'create'])->name('faculty-edit');
	Route::post('/faculty-add/{post_id?}', [FacultyController::class,'store'])->name('faculty-store');
	Route::post('/faculty-delete', [FacultyController::class,'delete'])->name('faculty-delete');

	//site post
	Route::get('/site-show', [siteController::class,'show'])->name('site-show');
	Route::get('/site-add', [siteController::class,'create'])->name('site-add');
	Route::get('/site-edit/{post_id?}', [siteController::class,'create'])->name('site-edit');
	Route::post('/site-add/{post_id?}', [siteController::class,'store'])->name('site-store');
	Route::post('/site-delete', [siteController::class,'delete'])->name('site-delete');
	Route::get('/contact-show', [Contactcontrol::class,'show'])->name('admin.contact.show');

	Route::get('/register', [UserController::class,'register']);
	Route::post('/register', [UserController::class,'registeruser'])->name('registeruser');
// });

Route::get('/index', [Homecontroller::class,'index']);
Route::get('/updates', [Homecontroller::class,'updates']);
Route::get('/details', [Homecontroller::class,'details']);	
Route::get('/details1', [Homecontroller::class,'details1']);	
Route::get('/details2', [Homecontroller::class,'details2']);	
Route::get('/details3', [Homecontroller::class,'details3']);
Route::get('/details4', [Homecontroller::class,'details4']);
Route::get('/detail', [Homecontroller::class,'detail']);
Route::get('/teams', [Homecontroller::class,'teams']);
Route::get('/board', [Homecontroller::class,'board']);
Route::get('/courses', [Homecontroller::class,'courses']);
Route::get('/faculty', [Homecontroller::class,'faculty']);

Route::get('/logout', [PostController::class, 'endSession']);

// Route::get('dashboard',[Contactcontrol::class, 'files_select2']);


// Route::post('contact',[Contactcontrol::class, 'message']);
// Route::get('message',[Contactcontrol::class, 'disFeedback']);
// Route::get('delFeedback/{id}',[Contactcontrol::class, 'delFeedback']);


Route::post('/contact', [Contactcontrol::class, 'ContactUsForm'])->name('contact.store');





