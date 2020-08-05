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

Route::get('layanan/kartu-kuning', function () {
    return view('layanan/formKK');
});

Route::get('/', 'PageController@index');
Route::get('/profile', 'PageController@profile');
Route::get('/kartu', 'PageController@kartu');
Route::get('/pelatihan', 'PageController@pelatihan');
Route::get('/faq', 'PageController@faq');
Route::get('/tentang', 'PageController@tentang');



Route::get('layanan/pelatihan', 'RegistrationController@create');
Route::resource('validasi/registration', 'RegistrationController');
Route::resource('validasi/card', 'CardController');
Route::get('download/card/{id}', 'CardController@generatePDF');

Route::get('admin/', 'loginController@indexLogin');
Route::post('admin/loginPost', 'loginController@loginPost');
Route::get('admin/logout', 'loginController@logout');


Route::get('admin/dashboard', 'DashboardController@index');

Route::resource('admin/employee', 'EmployeeController');
Route::resource('manajemen/admin', 'AdminController');
Route::get('profile/admin', 'AdminController@showProfile');
Route::Post('profile/adminPost', 'AdminController@editByProfile');
Route::resource('admin/cource', 'CourceController');
