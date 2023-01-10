<?php

namespace App\Http\Controllers\GeneratedTraits;

trait TestControllerTrait
{
    public function index()
    {
        return view('admin.testcar574903423.index');
    }

    public function create()
    {
        return view('admin.testcar574903423.create');
    }

    public function edit(TestCar574903423 $testcar574903423)
    {
        return view('admin.testcar574903423.edit', compact('testcar574903423'));
    }

    public function show(TestCar574903423 $testcar574903423)
    {
        return view('admin.testcar574903423.show', compact('testcar574903423'));
    }
}
