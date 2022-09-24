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

// Route::get('/', function () {
//     return view('sales_staff_view');
// });


Route::get('/', 'StaffController@viewSalesStaffs')->name('web.viewSalesStaff');
Route::get('/addnewstaff', 'StaffController@addNewStaff')->name('web.addNewStaff');
Route::get('/editstaff/{id}', 'StaffController@editStaff')->name('web.editStaff');
Route::get('/viewstaff/{id}', 'StaffController@viewStaff')->name('web.viewStaff');
Route::get('/deletestaff/{id}', 'StaffController@deleteStaff')->name('web.deleteStaff');

Route::post('/savenewstaff', 'StaffController@saveNewStaff')->name('web.saveNewStaff');
Route::post('/updatesalesstaff', 'StaffController@updateStaff')->name('web.updateStaff');

// manageroutes
Route::get('/manageroutes', 'SalesRouteController@manageSalesRoutes')->name('web.manageSalesRoutes');
Route::get('/addnewroute', 'SalesRouteController@addNewRoute')->name('web.addNewRoute');
Route::get('/editroute/{id}', 'SalesRouteController@editRoute')->name('web.editRoute');
Route::get('/deletroute/{id}', 'SalesRouteController@deleteRoute')->name('web.deleteRoute');


Route::post('/savenewroute', 'SalesRouteController@saveNewRoute')->name('web.saveNewRoute');
