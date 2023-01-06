<?php

namespace App\Http\Controllers\GeneratedTraits;

trait TestControllerTrait
{
    public function index()
    {
        return view('admin.testcar991503920.index');
    }

    public function create()
    {
        return view('admin.testcar991503920.create');
    }

    public function edit(TestCar991503920 $testcar991503920)
    {
        return view('admin.testcar991503920.edit', compact('testcar991503920'));
    }

    public function show(TestCar991503920 $testcar991503920)
    {
        return view('admin.testcar991503920.show', compact('testcar991503920'));
    }
}
