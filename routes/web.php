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
    return view('Login');
});

Route::get('/home', function () {
    return view('welcome');
});

Route::get('/probatchApprove', function () {
    return view('ProductbatchApprove');
});

Route::get('/productbatch', function () {
    return view('ProductBatch');
});

Route::get('/repaccount', function () {
    return view('RepRegister');
});

Route::get('/productsetup', function () {
    return view('ProductSetup');
});

Route::get('/companyProfile', function () {
    return view('CompanyProfile');
});

Route::post('/eee','App\Http\Controllers\LoginController@index');
