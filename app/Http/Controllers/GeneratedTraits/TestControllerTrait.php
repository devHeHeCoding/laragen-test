<?php

namespace App\Http\Controllers\GeneratedTraits;

trait TestControllerTrait
{
    public function index()
    {
        return view('admin.testcar1509077098.index');
    }

    public function create()
    {
        return view('admin.testcar1509077098.create');
    }

    public function edit(TestCar1509077098 $testcar1509077098)
    {
        return view('admin.testcar1509077098.edit', compact('testcar1509077098'));
    }

    public function show(TestCar1509077098 $testcar1509077098)
    {
        return view('admin.testcar1509077098.show', compact('testcar1509077098'));
    }
}
