<?php

namespace App\Http\Controllers\GeneratedTraits;

trait TestControllerTrait
{
    public function index()
    {
        return view('admin.testcar896237071.index');
    }

    public function create()
    {
        return view('admin.testcar896237071.create');
    }

    public function edit(TestCar896237071 $testcar896237071)
    {
        return view('admin.testcar896237071.edit', compact('testcar896237071'));
    }

    public function show(TestCar896237071 $testcar896237071)
    {
        return view('admin.testcar896237071.show', compact('testcar896237071'));
    }
}
