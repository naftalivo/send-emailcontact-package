<?php

use Illuminate\Support\Facades\Route;
use Naftalivo\EmailContact\Http\Controllers\EmailContactController;

Route::group(['namespace'=>'Naftalivo\EmailContact\Http\Controllers'], function(){

    Route::get('emailcontact', [EmailContactController::class, 'index'])->name('emailcontact');
    Route::post('emailcontact', [EmailContactController::class, 'send']);

});
