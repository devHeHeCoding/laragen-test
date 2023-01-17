<?php

namespace App\Http\Controllers\GeneratedTraits;

use App\Models\TestCar2105946856;

trait TestControllerTrait
{
    public function index()
    {
        return view('admin.testcar2105946856.index');
    }

    public function create()
    {
        return view('admin.testcar2105946856.create');
    }

    public function edit(TestCar2105946856 $testcar2105946856)
    {
        return view('admin.testcar2105946856.edit', compact('testcar2105946856'));
    }

    public function show(TestCar2105946856 $testcar2105946856)
    {
        return view('admin.testcar2105946856.show', compact('testcar2105946856'));
    }
}
