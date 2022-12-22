<?php

namespace App\Http\Controllers\GeneratedTraits;

trait TestControllerTrait
{
    public function index()
    {
        return view('admin.testcar1703144420.index');
    }

    public function create()
    {
        return view('admin.testcar1703144420.create');
    }

    public function edit(TestCar1703144420 $testcar1703144420)
    {
        return view('admin.testcar1703144420.edit', compact('testcar1703144420'));
    }

    public function show(TestCar1703144420 $testcar1703144420)
    {
        return view('admin.testcar1703144420.show', compact('testcar1703144420'));
    }
}
