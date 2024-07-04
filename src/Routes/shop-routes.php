<?php

use Illuminate\Support\Facades\Route;
use CodeRomeos\BagistoBookings\Http\Controllers\Shop\BagistoBookingsController;

Route::group(['middleware' => ['web', 'theme', 'locale', 'currency'], 'prefix' => 'bagistobookings'], function () {
    Route::get('', [BagistoBookingsController::class, 'index'])->name('shop.bagistobookings.index');
});