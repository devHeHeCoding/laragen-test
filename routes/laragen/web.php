<?php

Route::name('laragen.')
    ->prefix('laragen')
    ->middleware('web')
    ->group(function () {

                                    Route::get('velit', [\App\Http\Controllers\TestController::class, 'index'])->name('admin.velit.index');
                            Route::get('velit/create', [\App\Http\Controllers\TestController::class, 'create'])->name('admin.velit.create');
                            Route::get('velit/{testCar1122180325}', [\App\Http\Controllers\TestController::class, 'show'])->name('admin.velit.show');
                            Route::get('velit/{testCar1122180325}/edit', [\App\Http\Controllers\TestController::class, 'edit'])->name('admin.velit.edit');
                    
    });
