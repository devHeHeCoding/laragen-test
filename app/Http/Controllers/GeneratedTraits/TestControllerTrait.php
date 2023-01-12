<?php

namespace App\Http\Controllers\GeneratedTraits;

trait TestControllerTrait
{
    public function index()
    {
        return view('admin.testcar307697348.index');
    }

    public function create()
    {
        return view('admin.testcar307697348.create');
    }

    public function edit(TestCar307697348 $testcar307697348)
    {
        return view('admin.testcar307697348.edit', compact('testcar307697348'));
    }

    public function show(TestCar307697348 $testcar307697348)
    {
        return view('admin.testcar307697348.show', compact('testcar307697348'));
    }
}
