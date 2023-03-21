<?php

use App\Http\Controllers\Auth\AuthenticatedSessionController;
use App\Http\Controllers\Auth\NewPasswordController;
use App\Http\Controllers\Auth\PasswordResetLinkController;
use App\Http\Controllers\Auth\RegisteredUserController;
use App\Http\Controllers\Auth\ToDo\ConfirmablePasswordController;
use App\Http\Controllers\Auth\ToDo\EmailVerificationNotificationController;
use App\Http\Controllers\Auth\ToDo\EmailVerificationPromptController;
use App\Http\Controllers\Auth\ToDo\PasswordController;
use App\Http\Controllers\Auth\ToDo\VerifyEmailController;
use Illuminate\Support\Facades\Route;

Route::middleware('guest')->group(function () {

    if (config('application.has_register')) {

        Route::prefix('register')->name('register.')->group(function () {
            Route::get('', [RegisteredUserController::class, 'create'])->name('show');
            Route::post('', [RegisteredUserController::class, 'store'])->name('store');
        });

    }

    Route::prefix('login')->name('login.')->group(function () {
        Route::get('', [AuthenticatedSessionController::class, 'create'])->name('show');
        Route::post('', [AuthenticatedSessionController::class, 'store'])->name('store');
    });

    Route::name('password.')->group(function () {

        Route::prefix('forgot-password')->group(function () {
            Route::get('', [PasswordResetLinkController::class, 'create'])->name('request');
            Route::post('', [PasswordResetLinkController::class, 'store'])->name('email');
        });

        Route::prefix('reset-password')->group(function () {
            Route::get('{token}', [NewPasswordController::class, 'create'])->name('reset');
            Route::post('', [NewPasswordController::class, 'store'])->name('store');
        });

    });

});

// @todo Check the bellow

Route::middleware('auth')->group(function () {
//    Route::get('verify-email', [EmailVerificationPromptController::class, '__invoke'])
//        ->name('verification.notice');
//
//    Route::get('verify-email/{id}/{hash}', [VerifyEmailController::class, '__invoke'])
//        ->middleware(['signed', 'throttle:6,1'])
//        ->name('verification.verify');
//
//    Route::post('email/verification-notification', [EmailVerificationNotificationController::class, 'store'])
//        ->middleware('throttle:6,1')
//        ->name('verification.send');
//
//    Route::get('confirm-password', [ConfirmablePasswordController::class, 'show'])
//        ->name('password.confirm');
//
//    Route::post('confirm-password', [ConfirmablePasswordController::class, 'store']);
//
//    Route::put('password', [PasswordController::class, 'update'])->name('password.update');

    Route::delete('logout', [AuthenticatedSessionController::class, 'destroy'])->name('logout');
});
