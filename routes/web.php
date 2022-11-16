<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Autorogzites;
use App\Http\Controllers\Tulajrogzit;
use App\Http\Controllers\Balesetrogzites;
use App\Http\Controllers\Fooldal;


Route::get('/',[fooldal::class, "kiir"]);

Route::get('/autorogzites',[autorogzites::class, "bekuld"]);
Route::post('/autorogzites',[autorogzites::class, "rogzit"]);

Route::get('/tulajrogzit', [tulajrogzit::class, "bekuld"]);
Route::post('/tulajrogzit', [tulajrogzit::class, "rogzit"]);

Route::get('/balesetrogzites', [balesetrogzites::class, "bekuld"]);
Route::post('/balesetrogzites', [balesetrogzites::class, "rogzit"]);

