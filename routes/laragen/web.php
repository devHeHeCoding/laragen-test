<?php

Route::name('laragen.')
    ->prefix('laragen')
    ->middleware('web')
    ->group(function () {

                                    Route::get('route/prefix', [\App\Http\Controllers\Namespace\TestController::class, 'index'])->name('admin.route.prefix.index');
                            Route::get('route/prefix/create', [\App\Http\Controllers\Namespace\TestController::class, 'create'])->name('admin.route.prefix.create');
                            Route::get('route/prefix/{testCar1432875141}', [\App\Http\Controllers\Namespace\TestController::class, 'show'])->name('admin.route.prefix.show');
                            Route::get('route/prefix/{testCar1432875141}/edit', [\App\Http\Controllers\Namespace\TestController::class, 'edit'])->name('admin.route.prefix.edit');
                    
    });
