<?php

namespace App\Http\Controllers\GeneratedTraits;

use App\Models\TestCar292656556;

trait TestControllerTrait
{
    public function index()
    {
        return view('admin.testcar292656556.index');
    }

    public function create()
    {
        return view('admin.testcar292656556.create');
    }

    public function edit(TestCar292656556 $testcar292656556)
    {
        return view('admin.testcar292656556.edit', compact('testcar292656556'));
    }

    public function show(TestCar292656556 $testcar292656556)
    {
        return view('admin.testcar292656556.show', compact('testcar292656556'));
    }
}
