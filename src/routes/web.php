<?php

use Illuminate\Support\Facades\Route;

Route::get('user-login', [Alien\Gglink\Http\Controller\UserAuthController::class, 'index']);
Route::post('/auth/login', [Alien\Gglink\Http\Controller\UserAuthController::class, 'loginUser']);


//User Auth
Route::group(['middleware' => ['auth:api']], function () {
    Route::controller(Alien\Gglink\Http\Controller\UserAuthController::class)->group(function () {
        Route::get('home','dashboard');
        Route::get('auth/logout','logout');
    });

    //Profile Information
    Route::controller(Alien\Gglink\Http\Controller\ProfileController::class)->group(function () {

        Route::get('profile','index');
        Route::post('profile/store','store');
        Route::post('profile/update/{id}','update');
    });
});


