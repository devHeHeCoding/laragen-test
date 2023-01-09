<?php


Route::name('laragen')
    ->prefix('laragen')
    ->group(function (){

                                    Route::get('test_cars', [\App\Http\Controllers\TestController::class, 'index'])->name('test_cars.index');
                            Route::get('test_cars/create', [\App\Http\Controllers\TestController::class, 'create'])->name('test_cars/create.create');
                            Route::get('test_cars/{testcar2013868899}', [\App\Http\Controllers\TestController::class, 'show'])->name('test_cars/{testcar2013868899}.show');
                            Route::get('test_cars/{testcar2013868899}/edit', [\App\Http\Controllers\TestController::class, 'edit'])->name('test_cars/{testcar2013868899}/edit.edit');
                                                Route::get('test_cars', [\App\Http\Controllers\TestController::class, 'index'])->name('test_cars.index');
                            Route::get('test_cars/create', [\App\Http\Controllers\TestController::class, 'create'])->name('test_cars/create.create');
                            Route::get('test_cars/{testcar2013868899}', [\App\Http\Controllers\TestController::class, 'show'])->name('test_cars/{testcar2013868899}.show');
                            Route::get('test_cars/{testcar2013868899}/edit', [\App\Http\Controllers\TestController::class, 'edit'])->name('test_cars/{testcar2013868899}/edit.edit');
                    
    });
