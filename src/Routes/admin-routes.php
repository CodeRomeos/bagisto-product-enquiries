<?php

use Illuminate\Support\Facades\Route;
use CodeRomeos\BagistoBookings\Http\Controllers\Admin\BagistoBookingsController;

Route::group(['middleware' => ['web', 'admin'], 'prefix' => 'admin/bagistobookings'], function () {
    Route::controller(BagistoBookingsController::class)->group(function () {
        Route::get('', 'index')->name('admin.bagistobookings.index');
    });
});