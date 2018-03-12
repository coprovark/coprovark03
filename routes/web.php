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

Route::get('/hello', function () {
    return view('hello');
});

Route::get('/pagle1', function () {
    return view('pagle1');
});


Route::get('/page1', function () {
    return view('page.page1' , $array);
});

Route::get('/page2', function () {
    return view('page.page2');
});

Route::get('/page3', function () {
    return view('page.page3');
});

Route::get('/page4', function () {
    return view('page.page4');
});

Route::get('/page10/{id}', function ($id) {
    $array = [
        "ID" => $id
    ];
    return view('page.page10',$array);
});

Route::get('/form_register', function () {
    return view('page.form_register');
});

Route::post('/page','PageController@showlogin');


Route::get('/login', function () {
    $data = [
        "USERNAME" => "",
        "PASS"   => ""
    ];
    return view('page.login', $data);
});


Route::get('/form_check_login',function () {
    $data = [
        'users'=>[]
    ];
    return view('/form_check_login', $data);
});

Route::post('/form_check_login', 'PageController@form_check_login');

//////////////////////////////////////////////////////////////////////
Route::get('/form_login2',function () {
    $array = [
        'username'=>'',
        'name' =>''
    ];
    return view('/page.login',$array);

});


Route::post('/form_login2','PageController@form_login2');
////////////////////////////////////////////////////////////////
// Route::get('/list_user',function () {
   
//     return view('/list_user','UsersController@list_users');

// });
Route::get('/list_user','UsersControllers@list_user');

Route::post('/form_login2','PageController@form_login2');











