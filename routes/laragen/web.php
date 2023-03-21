<?php

Route::name('laragen.')
    ->prefix('laragen')
    ->middleware('web')
    ->group(function () {

                                    Route::get('sunt', [\App\Http\Controllers\TestController::class, 'index'])->name('admin.sunt.index');
                            Route::get('sunt/create', [\App\Http\Controllers\TestController::class, 'create'])->name('admin.sunt.create');
                            Route::get('sunt/{testCar1097791186}', [\App\Http\Controllers\TestController::class, 'show'])->name('admin.sunt.show');
                            Route::get('sunt/{testCar1097791186}/edit', [\App\Http\Controllers\TestController::class, 'edit'])->name('admin.sunt.edit');
                    
    });
