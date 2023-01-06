<?php

namespace App\Http\Controllers\GeneratedTraits;

trait TestControllerTrait
{
    public function index()
    {
        return view('admin.testcar821976173.index');
    }

    public function create()
    {
        return view('admin.testcar821976173.create');
    }

    public function edit(TestCar821976173 $testcar821976173)
    {
        return view('admin.testcar821976173.edit', compact('testcar821976173'));
    }

    public function show(TestCar821976173 $testcar821976173)
    {
        return view('admin.testcar821976173.show', compact('testcar821976173'));
    }
}
