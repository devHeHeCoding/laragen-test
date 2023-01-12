<?php

namespace App\Http\Controllers\GeneratedTraits;

trait TestControllerTrait
{
    public function index()
    {
        return view('admin.testcar1015982843.index');
    }

    public function create()
    {
        return view('admin.testcar1015982843.create');
    }

    public function edit(TestCar1015982843 $testcar1015982843)
    {
        return view('admin.testcar1015982843.edit', compact('testcar1015982843'));
    }

    public function show(TestCar1015982843 $testcar1015982843)
    {
        return view('admin.testcar1015982843.show', compact('testcar1015982843'));
    }
}
