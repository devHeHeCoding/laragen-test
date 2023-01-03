<?php

namespace App\Http\Controllers\GeneratedTraits;

trait TestControllerTrait
{
    public function index()
    {
        return view('admin.testcar1745940463.index');
    }

    public function create()
    {
        return view('admin.testcar1745940463.create');
    }

    public function edit(TestCar1745940463 $testcar1745940463)
    {
        return view('admin.testcar1745940463.edit', compact('testcar1745940463'));
    }

    public function show(TestCar1745940463 $testcar1745940463)
    {
        return view('admin.testcar1745940463.show', compact('testcar1745940463'));
    }
}
