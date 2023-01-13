<?php

namespace App\Http\Controllers\GeneratedTraits;

trait TestControllerTrait
{
    public function index()
    {
        return view('admin.testcar1763696955.index');
    }

    public function create()
    {
        return view('admin.testcar1763696955.create');
    }

    public function edit(TestCar1763696955 $testcar1763696955)
    {
        return view('admin.testcar1763696955.edit', compact('testcar1763696955'));
    }

    public function show(TestCar1763696955 $testcar1763696955)
    {
        return view('admin.testcar1763696955.show', compact('testcar1763696955'));
    }
}
