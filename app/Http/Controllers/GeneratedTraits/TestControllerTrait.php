<?php

namespace App\Http\Controllers\GeneratedTraits;

trait TestControllerTrait
{
    public function index()
    {
        return view('admin.testcar1961483755.index');
    }

    public function create()
    {
        return view('admin.testcar1961483755.create');
    }

    public function edit(TestCar1961483755 $testcar1961483755)
    {
        return view('admin.testcar1961483755.edit', compact('testcar1961483755'));
    }

    public function show(TestCar1961483755 $testcar1961483755)
    {
        return view('admin.testcar1961483755.show', compact('testcar1961483755'));
    }
}
