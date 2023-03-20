<?php

Route::name('laragen.')
    ->prefix('laragen')
    ->middleware('web')
    ->group(function () {

                                    Route::get('sint', [\App\Http\Controllers\TestController::class, 'index'])->name('admin.sint.index');
                            Route::get('sint/create', [\App\Http\Controllers\TestController::class, 'create'])->name('admin.sint.create');
                            Route::get('sint/{testCar646393988}', [\App\Http\Controllers\TestController::class, 'show'])->name('admin.sint.show');
                            Route::get('sint/{testCar646393988}/edit', [\App\Http\Controllers\TestController::class, 'edit'])->name('admin.sint.edit');
                    
    });
