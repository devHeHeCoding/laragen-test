<?php

Route::name('laragen.')
    ->prefix('laragen')
    ->middleware('web')
    ->group(function () {

                                    Route::get('quia', [\App\Http\Controllers\TestController::class, 'index'])->name('admin.quia.index');
                            Route::get('quia/create', [\App\Http\Controllers\TestController::class, 'create'])->name('admin.quia.create');
                            Route::get('quia/{testCar2093887144}', [\App\Http\Controllers\TestController::class, 'show'])->name('admin.quia.show');
                            Route::get('quia/{testCar2093887144}/edit', [\App\Http\Controllers\TestController::class, 'edit'])->name('admin.quia.edit');
                    
    });
