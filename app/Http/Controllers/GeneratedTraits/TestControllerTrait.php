<?php

namespace App\Http\Controllers\GeneratedTraits;

trait TestControllerTrait
{
    public function index()
    {
        return view('admin.testcar1096121828.index');
    }

    public function create()
    {
        return view('admin.testcar1096121828.create');
    }

    public function edit(TestCar1096121828 $testcar1096121828)
    {
        return view('admin.testcar1096121828.edit', compact('testcar1096121828'));
    }

    public function show(TestCar1096121828 $testcar1096121828)
    {
        return view('admin.testcar1096121828.show', compact('testcar1096121828'));
    }
}
