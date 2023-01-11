<?php

namespace App\Http\Controllers\GeneratedTraits;

trait TestControllerTrait
{
    public function index()
    {
        return view('admin.testcar1764276899.index');
    }

    public function create()
    {
        return view('admin.testcar1764276899.create');
    }

    public function edit(TestCar1764276899 $testcar1764276899)
    {
        return view('admin.testcar1764276899.edit', compact('testcar1764276899'));
    }

    public function show(TestCar1764276899 $testcar1764276899)
    {
        return view('admin.testcar1764276899.show', compact('testcar1764276899'));
    }
}
