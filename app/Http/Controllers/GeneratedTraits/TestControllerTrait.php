<?php

namespace App\Http\Controllers\GeneratedTraits;

trait TestControllerTrait
{
    public function index()
    {
        return view('admin.testcar2078232593.index');
    }

    public function create()
    {
        return view('admin.testcar2078232593.create');
    }

    public function edit(TestCar2078232593 $testcar2078232593)
    {
        return view('admin.testcar2078232593.edit', compact('testcar2078232593'));
    }

    public function show(TestCar2078232593 $testcar2078232593)
    {
        return view('admin.testcar2078232593.show', compact('testcar2078232593'));
    }
}
