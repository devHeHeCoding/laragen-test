<?php

namespace App\Http\Controllers\GeneratedTraits;

use App\Models\TestCar1693477620;

trait TestControllerTrait
{
    public function index()
    {
        return view('admin.testcar1693477620.index');
    }

    public function create()
    {
        return view('admin.testcar1693477620.create');
    }

    public function edit(TestCar1693477620 $testcar1693477620)
    {
        return view('admin.testcar1693477620.edit', compact('testcar1693477620'));
    }

    public function show(TestCar1693477620 $testcar1693477620)
    {
        return view('admin.testcar1693477620.show', compact('testcar1693477620'));
    }
}
