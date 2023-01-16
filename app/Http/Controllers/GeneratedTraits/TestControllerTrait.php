<?php

namespace App\Http\Controllers\GeneratedTraits;

use App\Models\TestCar1533430550;

trait TestControllerTrait
{
    public function index()
    {
        return view('admin.testcar1533430550.index');
    }

    public function create()
    {
        return view('admin.testcar1533430550.create');
    }

    public function edit(TestCar1533430550 $testcar1533430550)
    {
        return view('admin.testcar1533430550.edit', compact('testcar1533430550'));
    }

    public function show(TestCar1533430550 $testcar1533430550)
    {
        return view('admin.testcar1533430550.show', compact('testcar1533430550'));
    }
}
