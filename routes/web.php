<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Autorogzites;
use App\Http\Controllers\Tulajrogzit;
use App\Http\Controllers\Balesetrogzites;

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

Route::get('/autorogzites',[autorogzites::class, "bekuld"]);
Route::post('/autorogzites',[autorogzites::class, "rogzit"]);

Route::get('/tulajrogzit', [tulajrogzit::class, "bekuld"]);
Route::post('/tulajrogzit', [tulajrogzit::class, "rogzit"]);

Route::get('/balesetrogzites', [balesetrogzites::class, "bekuld"]);
Route::post('/balesetrogzites', [balesetrogzites::class, "rogzit"]);

