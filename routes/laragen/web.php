<?php

Route::name('laragen.')
    ->prefix('laragen')
    ->middleware('web')
    ->group(function () {

                                    Route::get('sit', [\App\Http\Controllers\TestController::class, 'index'])->name('admin.sit.index');
                            Route::get('sit/create', [\App\Http\Controllers\TestController::class, 'create'])->name('admin.sit.create');
                            Route::get('sit/{testCar1018937047}', [\App\Http\Controllers\TestController::class, 'show'])->name('admin.sit.show');
                            Route::get('sit/{testCar1018937047}/edit', [\App\Http\Controllers\TestController::class, 'edit'])->name('admin.sit.edit');
                    
    });
