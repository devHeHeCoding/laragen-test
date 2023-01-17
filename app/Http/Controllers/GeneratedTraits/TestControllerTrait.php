<?php

namespace App\Http\Controllers\GeneratedTraits;

use App\Models\TestCar1140341884;

trait TestControllerTrait
{
    public function index()
    {
        return view('admin.testcar1140341884.index');
    }

    public function create()
    {
        return view('admin.testcar1140341884.create');
    }

    public function edit(TestCar1140341884 $testcar1140341884)
    {
        return view('admin.testcar1140341884.edit', compact('testcar1140341884'));
    }

    public function show(TestCar1140341884 $testcar1140341884)
    {
        return view('admin.testcar1140341884.show', compact('testcar1140341884'));
    }
}
