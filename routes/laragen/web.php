<?php

Route::name('laragen.')
    ->prefix('laragen')
    ->middleware('web')
    ->group(function () {

                                    Route::get('soluta', [\App\Http\Controllers\TestController::class, 'index'])->name('admin.soluta.index');
                            Route::get('soluta/create', [\App\Http\Controllers\TestController::class, 'create'])->name('admin.soluta.create');
                            Route::get('soluta/{testCar252691639}', [\App\Http\Controllers\TestController::class, 'show'])->name('admin.soluta.show');
                            Route::get('soluta/{testCar252691639}/edit', [\App\Http\Controllers\TestController::class, 'edit'])->name('admin.soluta.edit');
                    
    });
