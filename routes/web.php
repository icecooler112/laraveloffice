<?php

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

Auth::routes();

// Route::get('/home', 'HomeController@index')->name('home');

//Route for normal user
Route::group(['middleware' => ['auth']], function () {
    Route::get('/home', 'HomeController@index');
});
//Route for admin
Route::group(['prefix' => 'admin'], function(){
    Route::group(['middleware' => ['admin']], function(){
        Route::get('/dashboard', 'admin\AdminController@index');
    });
});
Route::resource('/admin/staff', 'StaffController'); //สร้างเส้นทางการทำงานของ Staff
Route::get('/staff/{id}/delete' , 'StaffController@delete'); //ลบข้อมูล

Route::resource('/admin/position', 'PositionController'); //สร้างเส้นทางการทำงานของ Department
Route::get('/position/{id}/delete' , 'PositionController@delete'); //ลบข้อมูล

Route::resource('/admin/department', 'DepartmentController'); //สร้างเส้นทางการทำงานของ Position
Route::get('/department/{id}/delete' , 'DepartmentController@delete'); //ลบข้อมูล
