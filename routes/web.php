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

Route::get('/login', function () {
    return view('login');
});
Route::get('/index', function () {
    return view('index');
});
Route::get('/selectionform', function () {
    return view('selectionform');
});
Route::get('/signup', function () {
    return view('signup');
});
Route::get('/Finalpage', function () {
    return view('Finalpage');
});

Route::get('/index/login', function () {
    return view('login');
});

Route::get('/signup', function () {

    $p = signup::all();
    echo "<pre>";
    print_r($p->toArray());
    
    });
    
use App\Http\Controllers\signupController;

Route::get('/signup', [signupController::class, 'index']);
Route::post('/signup', [signupController::class, 'save']);