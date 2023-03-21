<?php

Route::name('laragen.')
    ->prefix('laragen')
    ->middleware('web')
    ->group(function () {

                                    Route::get('ducimus', [\App\Http\Controllers\TestController::class, 'index'])->name('admin.ducimus.index');
                            Route::get('ducimus/create', [\App\Http\Controllers\TestController::class, 'create'])->name('admin.ducimus.create');
                            Route::get('ducimus/{testCar1400970972}', [\App\Http\Controllers\TestController::class, 'show'])->name('admin.ducimus.show');
                            Route::get('ducimus/{testCar1400970972}/edit', [\App\Http\Controllers\TestController::class, 'edit'])->name('admin.ducimus.edit');
                    
    });
