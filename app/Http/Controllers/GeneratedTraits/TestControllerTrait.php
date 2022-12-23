<?php

namespace App\Http\Controllers\GeneratedTraits;

trait TestControllerTrait
{
    public function index()
    {
        return view('admin.testcar429275288.index');
    }

    public function create()
    {
        return view('admin.testcar429275288.create');
    }

    public function edit(TestCar429275288 $testcar429275288)
    {
        return view('admin.testcar429275288.edit', compact('testcar429275288'));
    }

    public function show(TestCar429275288 $testcar429275288)
    {
        return view('admin.testcar429275288.show', compact('testcar429275288'));
    }
}
