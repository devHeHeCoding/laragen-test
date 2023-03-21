<?php

Route::name('laragen.')
    ->prefix('laragen')
    ->middleware('web')
    ->group(function () {

                                    Route::get('consequatur', [\App\Http\Controllers\TestController::class, 'index'])->name('admin.consequatur.index');
                            Route::get('consequatur/create', [\App\Http\Controllers\TestController::class, 'create'])->name('admin.consequatur.create');
                            Route::get('consequatur/{testCar689738376}', [\App\Http\Controllers\TestController::class, 'show'])->name('admin.consequatur.show');
                            Route::get('consequatur/{testCar689738376}/edit', [\App\Http\Controllers\TestController::class, 'edit'])->name('admin.consequatur.edit');
                    
    });
