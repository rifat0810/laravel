<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\admin_controller;
use App\Http\Controllers\student_controller;
use App\Http\Controllers\course_controller;
use App\Http\Controllers\student_course_controller;

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
//     return view('.layouts/base');
// });

// only view
Route::get('/logout',[admin_controller::class,'logout']);

// add data in database
Route::post('add_student',[student_controller::class,'addStudent']);
Route::post('add_course',[course_controller::class,'addCourse']);
Route::post('add_student_cousre',[student_course_controller::class,'addStudentCourse']);
Route::post('register',[admin_controller::class,'register']);
Route::post('login',[admin_controller::class,'login']);

// updata data in database
Route::post('update_student',[student_controller::class,'updateStudent']);
Route::post('update_course',[course_controller::class,'updateCourse']);

// middleware
Route::group(['middleware'=>['authcheck']],function(){
    Route::view('/','index');
    Route::view('/add_student','add_student');
    Route::view('/add_course','add_course');
    Route::view('/student_course','student_course');
    Route::get('/register',[admin_controller::class,'signup'])->name('register');
    Route::get('/login',[admin_controller::class,'signin'])->name('login');
    
    //view data in database
    Route::get('/studentlist',[student_controller::class,'getAllStudent']);
    Route::get('/courselist',[course_controller::class,'getAllCourse']);
    Route::get('/studentcourselist',[student_course_controller::class,'getAllStudentCourse']);
    Route::get('studentallinformation/{id}',[student_controller::class,'studentallinfo']);

    //delete data in database
    Route::get('deleteStudent/{id}',[student_controller::class,'deleteStudent']);
    Route::get('deleteCourse/{id}',[course_controller::class,'deleteCourse']);

    //edit data in database
    Route::get('editStudent/{id}',[student_controller::class,'editStudent']);
    Route::get('editCourse/{id}',[course_controller::class,'editCourse']);
});