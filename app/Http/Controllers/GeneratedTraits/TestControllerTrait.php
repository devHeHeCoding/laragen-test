<?php

namespace App\Http\Controllers\GeneratedTraits;

trait TestControllerTrait
{
    public function index()
    {
        return view('admin.testcar205156679.index');
    }

    public function create()
    {
        return view('admin.testcar205156679.create');
    }

    public function edit(TestCar205156679 $testcar205156679)
    {
        return view('admin.testcar205156679.edit', compact('testcar205156679'));
    }

    public function show(TestCar205156679 $testcar205156679)
    {
        return view('admin.testcar205156679.show', compact('testcar205156679'));
    }
}
