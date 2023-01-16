<?php

namespace App\Http\Controllers\GeneratedTraits;

use App\Models\TestCar1440844221;

trait TestControllerTrait
{
    public function index()
    {
        return view('admin.testcar1440844221.index');
    }

    public function create()
    {
        return view('admin.testcar1440844221.create');
    }

    public function edit(TestCar1440844221 $testcar1440844221)
    {
        return view('admin.testcar1440844221.edit', compact('testcar1440844221'));
    }

    public function show(TestCar1440844221 $testcar1440844221)
    {
        return view('admin.testcar1440844221.show', compact('testcar1440844221'));
    }
}
