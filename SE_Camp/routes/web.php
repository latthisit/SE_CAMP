<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome'); // welcome.blade.php
});

Route::get('/multiply', function () {
    return view('multiply'); // welcome.blade.php
});

use App\Http\Controllers\MyAuth;
use App\Http\Controllers\MyController;

Route::get('/login', [MyAuth::class, 'login_view'])->name('login');
Route::get('/register', [MyAuth::class, 'register_view']);
Route::post('/logout', [MyAuth::class, 'logout_process']);
Route::post('/login', [MyAuth::class, 'login_process']);
Route::post('/register', [MyAuth::class, 'register_process']);

// use Illuminate\Http\Request;
Route::get('/my-route', function(){ //เอาไว้เข้าถึงตัวเว็บที่เราอยากจะแสดงผล ใน myfloder
    // return view('myroute');
    //        Key    =>  Value
    $data = ['val_a' => 'Hello World!'];
    $data['val_b'] = "Laravel";
    return view('myfolder.homeworkDynamic',$data);
});

Route::post('/my-route', function(Request $req){
    return view('myroute');
});




Route::get('/my-controller', [MyController::class, 'index']);
Route::get('/my-controller2', 'App\Http\Controllers\MyController@index');
Route::namespace('App\Http\Controllers')->group(function(){
    Route::get('/my-controller3', 'MyController@index');
    Route::post('/my-controller3-post', 'MyController@store');
});

Route::resource('my-controller4' , MyController::class);

//Route -> web.php
use App\Http\Controllers\C_titles;
Route::resource('titles', C_titles::class)->middleware('auth');
Route::middleware('auth')->group(function(){
    //auth frist
});
