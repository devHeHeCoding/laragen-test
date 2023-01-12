<?php

namespace App\Http\Controllers\GeneratedTraits;

trait TestControllerTrait
{
    public function index()
    {
        return view('admin.testcar14268556.index');
    }

    public function create()
    {
        return view('admin.testcar14268556.create');
    }

    public function edit(TestCar14268556 $testcar14268556)
    {
        return view('admin.testcar14268556.edit', compact('testcar14268556'));
    }

    public function show(TestCar14268556 $testcar14268556)
    {
        return view('admin.testcar14268556.show', compact('testcar14268556'));
    }
}
