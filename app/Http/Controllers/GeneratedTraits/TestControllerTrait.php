<?php

namespace App\Http\Controllers\GeneratedTraits;

use App\Models\TestCar1076792425;

trait TestControllerTrait
{
    public function index()
    {
        return view('admin.testcar1076792425.index');
    }

    public function create()
    {
        return view('admin.testcar1076792425.create');
    }

    public function edit(TestCar1076792425 $testcar1076792425)
    {
        return view('admin.testcar1076792425.edit', compact('testcar1076792425'));
    }

    public function show(TestCar1076792425 $testcar1076792425)
    {
        return view('admin.testcar1076792425.show', compact('testcar1076792425'));
    }
}
