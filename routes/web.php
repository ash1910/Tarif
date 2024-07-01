<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TariffController;

Route::get('/', function () {
    return view('welcome');
});


//Route::get('tariff',[TariffController::class, 'show']);
//Route::get('tariffsearch',[TariffController::class, 'search']);
Route::get('/tarifflist', [TariffController::class, 'search'])->name('tarifflist');
Route::get('searchtariff',[TariffController::class, 'showsearch'])->name('searchtariff');