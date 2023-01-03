<?php

namespace App\Http\Controllers\GeneratedTraits;

trait TestControllerTrait
{
    public function index()
    {
        return view('testcar1018804859.index');
    }

    public function create()
    {
        return view('testcar1018804859.create');
    }

    public function edit(TestCar1018804859 $testcar1018804859)
    {
        return view('testcar1018804859.edit', compact('testcar1018804859'));
    }

    public function show(TestCar1018804859 $testcar1018804859)
    {
        return view('testcar1018804859.show', compact('testcar1018804859'));
    }
}
