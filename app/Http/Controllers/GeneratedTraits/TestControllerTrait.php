<?php

namespace App\Http\Controllers\GeneratedTraits;

trait TestControllerTrait
{
    public function index()
    {
        return view('admin.testcar703777210.index');
    }

    public function create()
    {
        return view('admin.testcar703777210.create');
    }

    public function edit(TestCar703777210 $testcar703777210)
    {
        return view('admin.testcar703777210.edit', compact('testcar703777210'));
    }

    public function show(TestCar703777210 $testcar703777210)
    {
        return view('admin.testcar703777210.show', compact('testcar703777210'));
    }
}
