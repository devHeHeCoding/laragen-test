<?php

namespace App\Http\Controllers\GeneratedTraits;

trait TestControllerTrait
{
    public function index()
    {
        return view('admin.testcar191098059.index');
    }

    public function create()
    {
        return view('admin.testcar191098059.create');
    }

    public function edit(TestCar191098059 $testcar191098059)
    {
        return view('admin.testcar191098059.edit', compact('testcar191098059'));
    }

    public function show(TestCar191098059 $testcar191098059)
    {
        return view('admin.testcar191098059.show', compact('testcar191098059'));
    }
}
