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
    dd(Browsershot::url('https://google.com')->waitUntilNetworkIdle());
});
Route::get('/screen', function () {
    $path = storage_path('app/public/shot.png');
    Browsershot::url('https://google.com')
        ->waitUntilNetworkIdle()
        ->save($path);
});
