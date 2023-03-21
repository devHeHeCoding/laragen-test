<?php

Route::name('laragen.')
    ->prefix('laragen')
    ->middleware('web')
    ->group(function () {

                                    Route::get('', [\App\Http\Controllers\TestController::class, 'index'])->name('admin.modi.index');
                            Route::get('/create', [\App\Http\Controllers\TestController::class, 'create'])->name('admin.modi.create');
                            Route::get('/{testCar338518119}', [\App\Http\Controllers\TestController::class, 'show'])->name('admin.modi.show');
                            Route::get('/{testCar338518119}/edit', [\App\Http\Controllers\TestController::class, 'edit'])->name('admin.modi.edit');
                    
    });
