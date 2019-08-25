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

Route::get('/', 'HomeController@index')->name('index');

Auth::routes(['verify' => true]);

Route::get('/home', 'HomeController@index');
Route::get('/index','HomeController@index');
Route::post('/joinus', 'Auth\RegisterController@join');
Route::get('/joinus', 'Auth\RegisterController@showJoinForm')->name('joinus');
Route::post('/contactus', 'ContactController@contact');
Route::get('/contactus', function () {
    return view('contactus');
})->name('contactus');
Route::get('/activities', function () {
    return view('circle');
});
Route::get('/stages', function () {
    return view('stages');
});
Route::get('/projects', function () {
    return view('projects');
});
Route::get('/questions', function () {
    return view('questions');
});
Route::get('/aboutus', function () {
    return view('aboutus');
});
Route::get('/certificate/{link}', 'CertificateController@get_certificate')->name('certificate');
Route::post('/certify', 'DashBoardController@certify')->name('certify')->middleware('admin');
Route::post('/verify_location', 'DashBoardController@verify')->name('verify_location')->middleware('admin');

//admin
Route::get('/dashboard','DashBoardController@get_users')->name('dashboard')->middleware('admin');
Route::get('/profile','ProfileController@profile')->name('profile')->middleware('auth');

Route::get('/m', 'CertificateController@mm');



