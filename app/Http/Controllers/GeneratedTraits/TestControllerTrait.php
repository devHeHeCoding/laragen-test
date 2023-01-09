<?php

namespace App\Http\Controllers\GeneratedTraits;

trait TestControllerTrait
{
    public function index()
    {
        return view('admin.testcar465918373.index');
    }

    public function create()
    {
        return view('admin.testcar465918373.create');
    }

    public function edit(TestCar465918373 $testcar465918373)
    {
        return view('admin.testcar465918373.edit', compact('testcar465918373'));
    }

    public function show(TestCar465918373 $testcar465918373)
    {
        return view('admin.testcar465918373.show', compact('testcar465918373'));
    }
}
