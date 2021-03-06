<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Storage;
use Spatie\Browsershot\Browsershot;


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

Route::get('/test', function () {
    $path = storage_path('app/public/shot.png');
    Browsershot::url('https://google.com')->save($path);
});
Route::get('/screen', function () {
    $path = storage_path('app/public/shot.png');
    Browsershot::url('https://google.com')->setIncludePath('$PATH:/usr/local/lib')->timeout(120)->windowSize(640, 480)->save($path);
});
