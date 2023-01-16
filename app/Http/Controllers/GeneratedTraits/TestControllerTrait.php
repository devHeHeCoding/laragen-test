<?php

namespace App\Http\Controllers\GeneratedTraits;

use App\Models\TestCar2053709948;

trait TestControllerTrait
{
    public function index()
    {
        return view('admin.testcar2053709948.index');
    }

    public function create()
    {
        return view('admin.testcar2053709948.create');
    }

    public function edit(TestCar2053709948 $testcar2053709948)
    {
        return view('admin.testcar2053709948.edit', compact('testcar2053709948'));
    }

    public function show(TestCar2053709948 $testcar2053709948)
    {
        return view('admin.testcar2053709948.show', compact('testcar2053709948'));
    }
}
