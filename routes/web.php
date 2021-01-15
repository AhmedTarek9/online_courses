<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/admin', function () {
    return view('admin.all_users');
});

Route::get('/admin/adduser', function () {
    return view('admin.add_user');
});

Route::get('/admin/allusers', function () {
    return view('admin.all_users');
});

Route::get('/admin/allcourses', function () {
    return view('admin.all_courses');
});

Route::get('/admin/addcourse', function () {
    return view('admin.add_course');
});

Route::get('/admin/allcategeries', function () {
    return view('admin.all_categeries');
});

Route::get('/admin/addcategery', function () {
    return view('admin.add_categeries');
});


Route::get('/admin/edituser', function () {
    return view('admin.edit_user');
});

Route::get('/admin/editcourse', function () {
    return view('admin.edit_course');
});

Route::get('/admin/editcategery', function () {
    return view('admin.edit_categeries');
});


Route::get('/admin/viewuser', function () {
    return view('admin.viewuser');
});

Route::get('/admin/viewcourse', function () {
    return view('admin.viewcourse');
});

Route::get('/admin/viewcateg', function () {
    return view('admin.viewcateg');
});
