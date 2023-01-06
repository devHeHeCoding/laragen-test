<?php

namespace App\Http\Controllers\GeneratedTraits;

trait TestControllerTrait
{
    public function index()
    {
        return view('admin.testcar1650946503.index');
    }

    public function create()
    {
        return view('admin.testcar1650946503.create');
    }

    public function edit(TestCar1650946503 $testcar1650946503)
    {
        return view('admin.testcar1650946503.edit', compact('testcar1650946503'));
    }

    public function show(TestCar1650946503 $testcar1650946503)
    {
        return view('admin.testcar1650946503.show', compact('testcar1650946503'));
    }
}
