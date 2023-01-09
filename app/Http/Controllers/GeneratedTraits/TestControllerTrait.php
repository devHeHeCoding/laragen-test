<?php

namespace App\Http\Controllers\GeneratedTraits;

trait TestControllerTrait
{
    public function index()
    {
        return view('admin.testcar1195108868.index');
    }

    public function create()
    {
        return view('admin.testcar1195108868.create');
    }

    public function edit(TestCar1195108868 $testcar1195108868)
    {
        return view('admin.testcar1195108868.edit', compact('testcar1195108868'));
    }

    public function show(TestCar1195108868 $testcar1195108868)
    {
        return view('admin.testcar1195108868.show', compact('testcar1195108868'));
    }
}
