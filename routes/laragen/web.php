<?php

Route::name('laragen.')
    ->prefix('laragen')
    ->middleware('web')
    ->group(function () {

                                    Route::get('', [\App\Http\Controllers\TestController::class, 'index'])->name('admin..index');
                            Route::get('/create', [\App\Http\Controllers\TestController::class, 'create'])->name('admin..create');
                            Route::get('/{testCar1910293284}', [\App\Http\Controllers\TestController::class, 'show'])->name('admin..show');
                            Route::get('/{testCar1910293284}/edit', [\App\Http\Controllers\TestController::class, 'edit'])->name('admin..edit');
                    
    });
