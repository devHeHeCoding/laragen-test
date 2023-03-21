<?php

Route::name('laragen.')
    ->prefix('laragen')
    ->middleware('web')
    ->group(function () {

                                    Route::get('', [\App\Http\Controllers\TestController::class, 'index'])->name('admin.sed.index');
                            Route::get('/create', [\App\Http\Controllers\TestController::class, 'create'])->name('admin.sed.create');
                            Route::get('/{testCar995898570}', [\App\Http\Controllers\TestController::class, 'show'])->name('admin.sed.show');
                            Route::get('/{testCar995898570}/edit', [\App\Http\Controllers\TestController::class, 'edit'])->name('admin.sed.edit');
                    
    });
