<?php

namespace App\Http\Controllers\GeneratedTraits;

trait TestControllerTrait
{
    public function index()
    {
        return view('admin.testcar1834174868.index');
    }

    public function create()
    {
        return view('admin.testcar1834174868.create');
    }

    public function edit(TestCar1834174868 $testcar1834174868)
    {
        return view('admin.testcar1834174868.edit', compact('testcar1834174868'));
    }

    public function show(TestCar1834174868 $testcar1834174868)
    {
        return view('admin.testcar1834174868.show', compact('testcar1834174868'));
    }
}
