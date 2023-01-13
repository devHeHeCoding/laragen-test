<?php

namespace App\Http\Controllers\GeneratedTraits;

trait TestControllerTrait
{
    public function index()
    {
        return view('admin.testcar226442035.index');
    }

    public function create()
    {
        return view('admin.testcar226442035.create');
    }

    public function edit(TestCar226442035 $testcar226442035)
    {
        return view('admin.testcar226442035.edit', compact('testcar226442035'));
    }

    public function show(TestCar226442035 $testcar226442035)
    {
        return view('admin.testcar226442035.show', compact('testcar226442035'));
    }
}
