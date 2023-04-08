<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Backend\AdminController;
use App\Http\Controllers\Backend\UserAdminController;
use App\Http\Controllers\Backend\LoginAdminController;
use App\Http\Controllers\Backend\MemberAdminController;

Route::get('/', function () {
    return view('welcome');
});

Route::group(['prefix' => 'backend', 'middleware' => 'authAdmin'], function(){
    Route::resource('/', AdminController::class);
    Route::resource('/user', UserAdminController::class);
    Route::resource('/member', MemberAdminController::class);
});

Route::get('/backend/login', [LoginAdminController::class, 'login']);
Route::post('/backend/login', [LoginAdminController::class, 'login']);
Route::get('/backend/logout', [LoginAdminController::class, 'logout']);
Route::post('/backend/login-validate', [LoginAdminController::class, 'loginValidate']);
