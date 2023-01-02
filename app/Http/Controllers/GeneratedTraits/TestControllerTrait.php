<?php

namespace App\Http\Controllers\GeneratedTraits;

trait TestControllerTrait
{
    public function index()
    {
        return view('admin.testcar1655393634.index');
    }

    public function create()
    {
        return view('admin.testcar1655393634.create');
    }

    public function edit(TestCar1655393634 $testcar1655393634)
    {
        return view('admin.testcar1655393634.edit', compact('testcar1655393634'));
    }

    public function show(TestCar1655393634 $testcar1655393634)
    {
        return view('admin.testcar1655393634.show', compact('testcar1655393634'));
    }
}
