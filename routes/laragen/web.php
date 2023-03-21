<?php

Route::name('laragen.')
    ->prefix('laragen')
    ->middleware('web')
    ->group(function () {

                                    Route::get('', [\App\Http\Controllers\TestController::class, 'index'])->name('admin.non.index');
                            Route::get('/create', [\App\Http\Controllers\TestController::class, 'create'])->name('admin.non.create');
                            Route::get('/{testCar1874892366}', [\App\Http\Controllers\TestController::class, 'show'])->name('admin.non.show');
                            Route::get('/{testCar1874892366}/edit', [\App\Http\Controllers\TestController::class, 'edit'])->name('admin.non.edit');
                    
    });
