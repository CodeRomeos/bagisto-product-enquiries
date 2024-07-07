<?php

use Illuminate\Support\Facades\Route;
use CodeRomeos\BagistoProductEnquiries\Http\Controllers\Shop\BagistoProductEnquiriesController;

Route::group(['middleware' => ['web', 'theme', 'locale', 'currency'], 'prefix' => 'product-enquiries'], function () {
    Route::post('/product-enquiry', [BagistoProductEnquiriesController::class, 'store'])->name('shop.bagistoProductEnquiries.store');
    Route::get('/product-enquiry', [BagistoProductEnquiriesController::class, 'create'])->name('shop.bagistoProductEnquiries.create');
});