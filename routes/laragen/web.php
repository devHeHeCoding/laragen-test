<?php

Route::name('laragen.')
    ->prefix('laragen')
    ->middleware('web')
    ->group(function () {

                                    Route::get('', [\App\Http\Controllers\TestController::class, 'index'])->name('admin.veniam.index');
                            Route::get('/create', [\App\Http\Controllers\TestController::class, 'create'])->name('admin.veniam.create');
                            Route::get('/{testCar330993769}', [\App\Http\Controllers\TestController::class, 'show'])->name('admin.veniam.show');
                            Route::get('/{testCar330993769}/edit', [\App\Http\Controllers\TestController::class, 'edit'])->name('admin.veniam.edit');
                    
    });
