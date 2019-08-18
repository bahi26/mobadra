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
    return view('index');
})->name('index');

Auth::routes(['verify' => true]);

Route::get('/home', function () {
    return view('index');
});
Route::get('/index', function () {
    return view('index');
});
Route::post('/joinus', 'Auth\RegisterController@join');
Route::get('/joinus', 'Auth\RegisterController@showJoinForm')->name('joinus');
Route::post('/contactus', 'ContactController@contact');
Route::get('/contactus', function () {
    return view('contactus');
})->name('contactus');
Route::get('/activities', function () {
    return view('circle');
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
Route::get('/users','DashBoardController@get_users')->name('users')->middleware('admin');

Route::get('/map', function (){
    return view('map');
});

Route::get('/lmap', function(){
    $config = array();
    $config['center'] = 'Cairo, Egypt';
    $config['geocodeCaching']=true;
    GMaps::initialize($config);

    $map = GMaps::create_map();

    echo $map['js'];
    echo $map['html'];
//    return view('index')->with('map',$map);
});
