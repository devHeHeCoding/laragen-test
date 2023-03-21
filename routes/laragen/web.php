<?php

Route::name('laragen.')
    ->prefix('laragen')
    ->middleware('web')
    ->group(function () {

                                    Route::get('', [\App\Http\Controllers\TestController::class, 'index'])->name('admin.facilis.index');
                            Route::get('/create', [\App\Http\Controllers\TestController::class, 'create'])->name('admin.facilis.create');
                            Route::get('/{testCar2085255194}', [\App\Http\Controllers\TestController::class, 'show'])->name('admin.facilis.show');
                            Route::get('/{testCar2085255194}/edit', [\App\Http\Controllers\TestController::class, 'edit'])->name('admin.facilis.edit');
                    
    });
