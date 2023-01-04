<?php

namespace App\Http\Controllers\GeneratedTraits;

trait TestControllerTrait
{
    public function index()
    {
        return view('admin.testcar552468308.index');
    }

    public function create()
    {
        return view('admin.testcar552468308.create');
    }

    public function edit(TestCar552468308 $testcar552468308)
    {
        return view('admin.testcar552468308.edit', compact('testcar552468308'));
    }

    public function show(TestCar552468308 $testcar552468308)
    {
        return view('admin.testcar552468308.show', compact('testcar552468308'));
    }
}
