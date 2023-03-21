<?php

Route::name('laragen.')
    ->prefix('laragen')
    ->middleware('web')
    ->group(function () {

                                    Route::get('', [\App\Http\Controllers\TestController::class, 'index'])->name('admin.aut.index');
                            Route::get('/create', [\App\Http\Controllers\TestController::class, 'create'])->name('admin.aut.create');
                            Route::get('/{testCar48801496}', [\App\Http\Controllers\TestController::class, 'show'])->name('admin.aut.show');
                            Route::get('/{testCar48801496}/edit', [\App\Http\Controllers\TestController::class, 'edit'])->name('admin.aut.edit');
                    
    });
