<?php

Route::name('laragen-api.')
    ->prefix('laragen-api')
    ->middleware('api')
    ->group(function () {

                                    Route::get('route/prefix', [\App\Http\Controllers\Api\Namespace\TestController::class, 'index'])->name('route.prefix.index');
                            Route::post('route/prefix', [\App\Http\Controllers\Api\Namespace\TestController::class, 'store'])->name('route.prefix.store');
                            Route::get('route/prefix/{testCar990725055}', [\App\Http\Controllers\Api\Namespace\TestController::class, 'show'])->name('route.prefix.show');
                            Route::patch('route/prefix/{testCar990725055}', [\App\Http\Controllers\Api\Namespace\TestController::class, 'update'])->name('route.prefix.update');
                            Route::delete('route/prefix/{testCar990725055}', [\App\Http\Controllers\Api\Namespace\TestController::class, 'destroy'])->name('route.prefix.destroy');
                    
    });
