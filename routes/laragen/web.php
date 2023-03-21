<?php

Route::name('laragen.')
    ->prefix('laragen')
    ->middleware('web')
    ->group(function () {

                                    Route::get('', [\App\Http\Controllers\TestController::class, 'index'])->name('admin.autem.index');
                            Route::get('/create', [\App\Http\Controllers\TestController::class, 'create'])->name('admin.autem.create');
                            Route::get('/{testCar2114917132}', [\App\Http\Controllers\TestController::class, 'show'])->name('admin.autem.show');
                            Route::get('/{testCar2114917132}/edit', [\App\Http\Controllers\TestController::class, 'edit'])->name('admin.autem.edit');
                    
    });
