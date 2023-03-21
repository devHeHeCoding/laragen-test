<?php

Route::name('laragen.')
    ->prefix('laragen')
    ->middleware('web')
    ->group(function () {

                                    Route::get('', [\App\Http\Controllers\TestController::class, 'index'])->name('admin.inventore.index');
                            Route::get('/create', [\App\Http\Controllers\TestController::class, 'create'])->name('admin.inventore.create');
                            Route::get('/{testCar1059562808}', [\App\Http\Controllers\TestController::class, 'show'])->name('admin.inventore.show');
                            Route::get('/{testCar1059562808}/edit', [\App\Http\Controllers\TestController::class, 'edit'])->name('admin.inventore.edit');
                    
    });
