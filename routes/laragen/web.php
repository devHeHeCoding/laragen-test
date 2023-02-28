<?php

Route::name('laragen.')
    ->prefix('laragen')
    ->middleware('web')
    ->group(function () {

                                    Route::get('test_cars', [\App\Http\Controllers\TestController::class, 'index'])->name('admin.test_cars.index');
                            Route::get('test_cars/create', [\App\Http\Controllers\TestController::class, 'create'])->name('admin.test_cars.create');
                            Route::get('test_cars/{testCar1761529517}', [\App\Http\Controllers\TestController::class, 'show'])->name('admin.test_cars.show');
                            Route::get('test_cars/{testCar1761529517}/edit', [\App\Http\Controllers\TestController::class, 'edit'])->name('admin.test_cars.edit');
                    
    });
