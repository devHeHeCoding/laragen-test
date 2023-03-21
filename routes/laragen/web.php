<?php

Route::name('laragen.')
    ->prefix('laragen')
    ->middleware('web')
    ->group(function () {

                                    Route::get('', [\App\Http\Controllers\TestController::class, 'index'])->name('admin.animi.index');
                            Route::get('/create', [\App\Http\Controllers\TestController::class, 'create'])->name('admin.animi.create');
                            Route::get('/{testCar1656671257}', [\App\Http\Controllers\TestController::class, 'show'])->name('admin.animi.show');
                            Route::get('/{testCar1656671257}/edit', [\App\Http\Controllers\TestController::class, 'edit'])->name('admin.animi.edit');
                    
    });
