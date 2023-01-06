<?php

namespace App\Http\Controllers\GeneratedTraits;

trait TestControllerTrait
{
    public function index()
    {
        return view('admin.testcar1211856944.index');
    }

    public function create()
    {
        return view('admin.testcar1211856944.create');
    }

    public function edit(TestCar1211856944 $testcar1211856944)
    {
        return view('admin.testcar1211856944.edit', compact('testcar1211856944'));
    }

    public function show(TestCar1211856944 $testcar1211856944)
    {
        return view('admin.testcar1211856944.show', compact('testcar1211856944'));
    }
}
