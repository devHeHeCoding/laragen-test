<?php

namespace App\Http\Controllers\GeneratedTraits;

use App\Models\TestCar1998510017;

trait TestControllerTrait
{
    public function index()
    {
        return view('admin.testcar1998510017.index');
    }

    public function create()
    {
        return view('admin.testcar1998510017.create');
    }

    public function edit(TestCar1998510017 $testcar1998510017)
    {
        return view('admin.testcar1998510017.edit', compact('testcar1998510017'));
    }

    public function show(TestCar1998510017 $testcar1998510017)
    {
        return view('admin.testcar1998510017.show', compact('testcar1998510017'));
    }
}
