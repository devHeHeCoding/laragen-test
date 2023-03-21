<?php

Route::name('laragen.')
    ->prefix('laragen')
    ->middleware('web')
    ->group(function () {

                                    Route::get('', [\App\Http\Controllers\TestController::class, 'index'])->name('admin.dolorum.index');
                            Route::get('/create', [\App\Http\Controllers\TestController::class, 'create'])->name('admin.dolorum.create');
                            Route::get('/{testCar1183076443}', [\App\Http\Controllers\TestController::class, 'show'])->name('admin.dolorum.show');
                            Route::get('/{testCar1183076443}/edit', [\App\Http\Controllers\TestController::class, 'edit'])->name('admin.dolorum.edit');
                    
    });
