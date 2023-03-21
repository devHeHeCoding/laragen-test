<?php

Route::name('laragen.')
    ->prefix('laragen')
    ->middleware('web')
    ->group(function () {

                                    Route::get('', [\App\Http\Controllers\TestController::class, 'index'])->name('admin.fuga.index');
                            Route::get('/create', [\App\Http\Controllers\TestController::class, 'create'])->name('admin.fuga.create');
                            Route::get('/{testCar1347878297}', [\App\Http\Controllers\TestController::class, 'show'])->name('admin.fuga.show');
                            Route::get('/{testCar1347878297}/edit', [\App\Http\Controllers\TestController::class, 'edit'])->name('admin.fuga.edit');
                    
    });
