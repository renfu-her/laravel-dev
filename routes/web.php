<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Backend\AdminController;
use App\Http\Controllers\Backend\UserAdminController;

Route::get('/', function () {
    return view('welcome');
});

Route::group(['prefix' => 'backend'], function(){
    Route::resource('/', AdminController::class);
    Route::resource('/user', UserAdminController::class);
});
