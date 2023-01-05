<?php

namespace App\Http\Controllers\GeneratedTraits;

trait TestControllerTrait
{
    public function index()
    {
        return view('admin.testcar979640444.index');
    }

    public function create()
    {
        return view('admin.testcar979640444.create');
    }

    public function edit(TestCar979640444 $testcar979640444)
    {
        return view('admin.testcar979640444.edit', compact('testcar979640444'));
    }

    public function show(TestCar979640444 $testcar979640444)
    {
        return view('admin.testcar979640444.show', compact('testcar979640444'));
    }
}
