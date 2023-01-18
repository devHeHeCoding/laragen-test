<?php

Route::name('laragen.')
    ->prefix('laragen')
    ->group(function () {

                                    Route::get('test_cars', [\App\Http\Controllers\TestController::class, 'index'])->name('admin.test_cars.index');
                            Route::get('test_cars/create', [\App\Http\Controllers\TestController::class, 'create'])->name('admin.test_cars.create');
                            Route::get('test_cars/{testcar949074142}', [\App\Http\Controllers\TestController::class, 'show'])->name('admin.test_cars.show');
                            Route::get('test_cars/{testcar949074142}/edit', [\App\Http\Controllers\TestController::class, 'edit'])->name('admin.test_cars.edit');
                                                Route::get('test_cars', [\App\Http\Controllers\TestController::class, 'index'])->name('admin.test_cars.index');
                            Route::get('test_cars/create', [\App\Http\Controllers\TestController::class, 'create'])->name('admin.test_cars.create');
                            Route::get('test_cars/{testcar949074142}', [\App\Http\Controllers\TestController::class, 'show'])->name('admin.test_cars.show');
                            Route::get('test_cars/{testcar949074142}/edit', [\App\Http\Controllers\TestController::class, 'edit'])->name('admin.test_cars.edit');
                    
    });
