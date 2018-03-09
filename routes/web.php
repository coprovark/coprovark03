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

    $array = [
        "NAME" => "" ,
        "ID"   => "",
        "GEN"  => "",
        "NUM"  => ""
];
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

Route::get('/login', function () {
    return view('page.login');
});

#localhost:8000
Route::post('/page','PageController@show');

#select post
Route::post('/page12','PageController@show_select');

