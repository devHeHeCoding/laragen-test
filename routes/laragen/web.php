<?php


Route::name('laragen')
    ->prefix('laragen')
    ->group(function (){

                                    Route::get('test_cars', [App/Models/Controllers/TestController::class, 'index'])->name('test_cars.index');
                            Route::get('test_cars/create', [App/Models/Controllers/TestController::class, 'create'])->name('test_cars/create.create');
                            Route::get('test_cars/{testcar1018804859}', [App/Models/Controllers/TestController::class, 'show'])->name('test_cars/{testcar1018804859}.show');
                            Route::get('test_cars/{testcar1018804859}/edit', [App/Models/Controllers/TestController::class, 'edit'])->name('test_cars/{testcar1018804859}/edit.edit');
                                                Route::get('test_cars', [App/Models/Controllers/TestController::class, 'index'])->name('test_cars.index');
                            Route::get('test_cars/create', [App/Models/Controllers/TestController::class, 'create'])->name('test_cars/create.create');
                            Route::get('test_cars/{testcar1018804859}', [App/Models/Controllers/TestController::class, 'show'])->name('test_cars/{testcar1018804859}.show');
                            Route::get('test_cars/{testcar1018804859}/edit', [App/Models/Controllers/TestController::class, 'edit'])->name('test_cars/{testcar1018804859}/edit.edit');
                    
    });
