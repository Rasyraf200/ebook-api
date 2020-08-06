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

Route::get('/me', function () {
    return ['NIS' => '3103118112', 
    'Nama'=> 'Rakha Asyraf', 
    'Gender'=> 'Laki-laki',
    'Phone'=> '085156088055',
    'Class'=>'XII RPL 4'];
});
Route::get('auth', 'AuthController@me');
