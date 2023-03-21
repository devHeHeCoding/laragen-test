<?php

Route::name('laragen.')
    ->prefix('laragen')
    ->middleware('web')
    ->group(function () {

                                    Route::get('', [\App\Http\Controllers\TestController::class, 'index'])->name('admin.dolorem.index');
                            Route::get('/create', [\App\Http\Controllers\TestController::class, 'create'])->name('admin.dolorem.create');
                            Route::get('/{testCar369693455}', [\App\Http\Controllers\TestController::class, 'show'])->name('admin.dolorem.show');
                            Route::get('/{testCar369693455}/edit', [\App\Http\Controllers\TestController::class, 'edit'])->name('admin.dolorem.edit');
                    
    });
