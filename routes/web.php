<?php

use Illuminate\Support\Facades\Route;

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
    // sleep(5);
    // \Mail::to('swain1467@gmail.com')->send(new \App\Mail\SendTestMail());
    dispatch(new \App\Jobs\SendEmailJob());
    return view('welcome');
});

Route::get('/Data', 'App\Http\Controllers\TestController@Data');