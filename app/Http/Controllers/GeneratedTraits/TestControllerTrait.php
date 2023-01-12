<?php

namespace App\Http\Controllers\GeneratedTraits;

trait TestControllerTrait
{
    public function index()
    {
        return view('admin.testcar1914410034.index');
    }

    public function create()
    {
        return view('admin.testcar1914410034.create');
    }

    public function edit(TestCar1914410034 $testcar1914410034)
    {
        return view('admin.testcar1914410034.edit', compact('testcar1914410034'));
    }

    public function show(TestCar1914410034 $testcar1914410034)
    {
        return view('admin.testcar1914410034.show', compact('testcar1914410034'));
    }
}
