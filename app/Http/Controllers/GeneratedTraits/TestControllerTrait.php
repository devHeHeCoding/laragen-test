<?php

namespace App\Http\Controllers\GeneratedTraits;

trait TestControllerTrait
{
    public function index()
    {
        return view('admin.testcar1607781032.index');
    }

    public function create()
    {
        return view('admin.testcar1607781032.create');
    }

    public function edit(TestCar1607781032 $testcar1607781032)
    {
        return view('admin.testcar1607781032.edit', compact('testcar1607781032'));
    }

    public function show(TestCar1607781032 $testcar1607781032)
    {
        return view('admin.testcar1607781032.show', compact('testcar1607781032'));
    }
}
