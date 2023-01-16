<?php

namespace App\Http\Controllers\GeneratedTraits;

trait TestControllerTrait
{
    public function index()
    {
        return view('admin.testcar53714731.index');
    }

    public function create()
    {
        return view('admin.testcar53714731.create');
    }

    public function edit(TestCar53714731 $testcar53714731)
    {
        return view('admin.testcar53714731.edit', compact('testcar53714731'));
    }

    public function show(TestCar53714731 $testcar53714731)
    {
        return view('admin.testcar53714731.show', compact('testcar53714731'));
    }
}
