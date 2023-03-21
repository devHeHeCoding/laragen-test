<?php

Route::name('laragen.')
    ->prefix('laragen')
    ->middleware('web')
    ->group(function () {

                                    Route::get('', [\App\Http\Controllers\TestController::class, 'index'])->name('admin.ut.index');
                            Route::get('/create', [\App\Http\Controllers\TestController::class, 'create'])->name('admin.ut.create');
                            Route::get('/{testCar1196383960}', [\App\Http\Controllers\TestController::class, 'show'])->name('admin.ut.show');
                            Route::get('/{testCar1196383960}/edit', [\App\Http\Controllers\TestController::class, 'edit'])->name('admin.ut.edit');
                    
    });
