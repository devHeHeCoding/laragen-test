<?php

namespace App\Http\Controllers\GeneratedTraits;

trait TestControllerTrait
{
    public function index()
    {
        return view('admin.testcar1465940740.index');
    }

    public function create()
    {
        return view('admin.testcar1465940740.create');
    }

    public function edit(TestCar1465940740 $testcar1465940740)
    {
        return view('admin.testcar1465940740.edit', compact('testcar1465940740'));
    }

    public function show(TestCar1465940740 $testcar1465940740)
    {
        return view('admin.testcar1465940740.show', compact('testcar1465940740'));
    }
}
