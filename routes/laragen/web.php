<?php

Route::name('laragen.')
    ->prefix('laragen')
    ->middleware('web')
    ->group(function () {

                                    Route::get('testcontroller', [\App\Http\Controllers\TestController::class, 'index'])->name('admin.testcontroller.index');
                            Route::get('testcontroller/create', [\App\Http\Controllers\TestController::class, 'create'])->name('admin.testcontroller.create');
                            Route::get('testcontroller/{testCar1556945516}', [\App\Http\Controllers\TestController::class, 'show'])->name('admin.testcontroller.show');
                            Route::get('testcontroller/{testCar1556945516}/edit', [\App\Http\Controllers\TestController::class, 'edit'])->name('admin.testcontroller.edit');
                    
    });
