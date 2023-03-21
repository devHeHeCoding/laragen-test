<?php

Route::name('laragen.')
    ->prefix('laragen')
    ->middleware('web')
    ->group(function () {

                                    Route::get('voluptas', [\App\Http\Controllers\TestController::class, 'index'])->name('admin.voluptas.index');
                            Route::get('voluptas/create', [\App\Http\Controllers\TestController::class, 'create'])->name('admin.voluptas.create');
                            Route::get('voluptas/{testCar1296106034}', [\App\Http\Controllers\TestController::class, 'show'])->name('admin.voluptas.show');
                            Route::get('voluptas/{testCar1296106034}/edit', [\App\Http\Controllers\TestController::class, 'edit'])->name('admin.voluptas.edit');
                    
    });
