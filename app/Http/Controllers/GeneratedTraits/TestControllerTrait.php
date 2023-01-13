<?php

namespace App\Http\Controllers\GeneratedTraits;

trait TestControllerTrait
{
    public function index()
    {
        return view('admin.testcar1118486347.index');
    }

    public function create()
    {
        return view('admin.testcar1118486347.create');
    }

    public function edit(TestCar1118486347 $testcar1118486347)
    {
        return view('admin.testcar1118486347.edit', compact('testcar1118486347'));
    }

    public function show(TestCar1118486347 $testcar1118486347)
    {
        return view('admin.testcar1118486347.show', compact('testcar1118486347'));
    }
}
