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
    $path = storage_path('app\public\shot.png');
    Browsershot::url('https://google.com')
        ->userAgent('Mozilla/5.0 (iPhone; CPU iPhone OS 11_0 like Mac OS X) AppleWebKit/604.1.38 (KHTML, like Gecko) Version/11.0 Mobile/15A372 Safari/604.1')
        ->windowSize(375, 812)
        ->deviceScaleFactor(3)
        ->mobile()
        ->touch()
        ->landscape(false)
        ->setNodeModulePath('C:\OpenServer\domains\example-app\node_modules')
        ->save($path);
});
