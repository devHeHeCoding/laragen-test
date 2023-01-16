<?php

namespace App\Http\Controllers\GeneratedTraits;

use App\Models\TestCar1018352743;

trait TestControllerTrait
{
    public function index()
    {
        return view('admin.testcar1018352743.index');
    }

    public function create()
    {
        return view('admin.testcar1018352743.create');
    }

    public function edit(TestCar1018352743 $testcar1018352743)
    {
        return view('admin.testcar1018352743.edit', compact('testcar1018352743'));
    }

    public function show(TestCar1018352743 $testcar1018352743)
    {
        return view('admin.testcar1018352743.show', compact('testcar1018352743'));
    }
}
