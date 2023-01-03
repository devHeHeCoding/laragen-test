<?php

namespace App\Http\Controllers\GeneratedTraits;

trait TestControllerTrait
{
    public function index()
    {
        return view('admin.testcar425811051.index');
    }

    public function create()
    {
        return view('admin.testcar425811051.create');
    }

    public function edit(TestCar425811051 $testcar425811051)
    {
        return view('admin.testcar425811051.edit', compact('testcar425811051'));
    }

    public function show(TestCar425811051 $testcar425811051)
    {
        return view('admin.testcar425811051.show', compact('testcar425811051'));
    }
}
