<?php

use Illuminate\Support\Facades\Route;
use CodeRomeos\BagistoProductEnquiries\Http\Controllers\Shop\BagistoProductEnquiriesController;

Route::group(['middleware' => ['web', 'theme', 'locale', 'currency'], 'prefix' => 'bagistoProductEnquiries'], function () {
    Route::get('', [BagistoProductEnquiriesController::class, 'index'])->name('shop.bagistoProductEnquiries.index');
});