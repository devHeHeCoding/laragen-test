<?php

Route::name('laragen.')
    ->prefix('laragen')
    ->middleware('web')
    ->group(function () {

                                    Route::get('nobis', [\App\Http\Controllers\TestController::class, 'index'])->name('admin.nobis.index');
                            Route::get('nobis/create', [\App\Http\Controllers\TestController::class, 'create'])->name('admin.nobis.create');
                            Route::get('nobis/{testCar1172135082}', [\App\Http\Controllers\TestController::class, 'show'])->name('admin.nobis.show');
                            Route::get('nobis/{testCar1172135082}/edit', [\App\Http\Controllers\TestController::class, 'edit'])->name('admin.nobis.edit');
                    
    });
