<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SiteController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\UserAuthController;

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
//     return view('welcome');
// });



Route::get('course',[AdminController::class, 'course']);
Route::get('add_course',[SiteController::class, 'add_course']);
Route::post('insert_course',[AdminController::class, 'insert_course']);
Route::get('edit_course/{id}',[AdminController::class, 'edit_course']);
Route::post('update_course/{id}',[AdminController::class, 'update_course']);
Route::get('delete_course/{id}', [AdminController::class, 'delete_course']);

Route::get('semester',[AdminController::class, 'semester']);
Route::get('add_semester',[SiteController::class, 'add_semester']);
Route::post('insert_semester',[AdminController::class, 'insert_semester']);
Route::get('edit_semester/{id}',[AdminController::class, 'edit_semester']);
Route::post('update_semester/{id}',[AdminController::class, 'update_semester']);
Route::get('delete_semester/{id}', [AdminController::class, 'delete_semester']);

Route::get('add_department',[SiteController::class, 'add_department']);
Route::post('insert_department',[AdminController::class, 'insert_department']);

Route::get('session',[AdminController::class, 'session']);
Route::get('add_session',[SiteController::class, 'add_session']);
Route::post('create_session',[AdminController::class, 'create_session']);
Route::get('edit_session/{id}',[AdminController::class, 'edit_session']);
Route::post('update_session/{id}',[AdminController::class, 'update_session']);
Route::get('delete_session/{id}', [AdminController::class, 'delete_session']);


Route::get('delete_student',[SiteController::class, 'delete_student']);



Route::get('manage_course',[AdminController::class, 'manage_course']);
Route::post('assign_course',[AdminController::class, 'assign_course']);
Route::get('manage_users',[AdminController::class, 'manage_users']);
Route::get('edit_user/{id}',[AdminController::class, 'edit_user']);
Route::post('update_user/{id}',[AdminController::class, 'update_user']);
Route::get('delete_user/{id}',[AdminController::class, 'delete_user']);
Route::get('changeStatus/{id}', [AdminController::class, 'changeStatus']);




Route::get('all_question',[SiteController::class, 'all_question']);
Route::get('assignment',[SiteController::class, 'assignment']);
Route::post('add_assignment',[AdminController::class, 'add_assignment']);
Route::get('delete_question',[SiteController::class, 'delete_question']);
Route::get('edit_question',[SiteController::class, 'edit_question']);

Route::get('enrollment',[AdminController::class, 'enrollment']);
Route::post('course_enrollment/{id}',[AdminController::class, 'course_enrollment']);
Route::get('question',[SiteController::class, 'question']);
Route::get('view_course',[SiteController::class, 'view_course']);
Route::get('view_enrolled_course',[SiteController::class, 'view_enrolled_course']);

Route::post('student_registration',[AdminController::class, 'student_registration']);


Route::post('add_student',[UserAuthController::class,'add_student'])->name('pages.auth.add_student');
Route::post('add_teacher',[UserAuthController::class,'add_teacher'])->name('pages.auth.add_teacher');
Route::post('user_login',[UserAuthController::class,'user_login'])->name('pages.auth.login');
Route::get('home',[UserAuthController::class,'home'])->name('home');

Route::get('/',[SiteController::class,'index'])->name('/');
Route::get('user_registration',[UserAuthController::class,'user_registration']);
Route::get('registration',[UserAuthController::class,'registration']);


Route::group(['middleware'=>['AuthCheck']], function(){
    Route::get('login',[UserAuthController::class, 'login']);
    Route::get('register',[UserAuthController::class,'register']);
    Route::get('logout',[UserAuthController::class,'logout']);

    Route::get('dashboard',[UserAuthController::class,'dashboard'])->name('dashboard');
});