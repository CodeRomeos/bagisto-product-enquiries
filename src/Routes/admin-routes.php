<?php

use Illuminate\Support\Facades\Route;
use CodeRomeos\BagistoProductEnquiries\Http\Controllers\Admin\BagistoProductEnquiriesController;

Route::group(['middleware' => ['web', 'admin'], 'prefix' => 'admin/bagistoProductEnquiries'], function () {
    Route::controller(BagistoProductEnquiriesController::class)->group(function () {
        Route::get('', 'index')->name('admin.bagistoProductEnquiries.index');
    });
});