<?php

namespace App\Http\Controllers\GeneratedTraits;

trait TestControllerTrait
{
    public function index()
    {
        return view('admin.testcar2013868899.index');
    }

    public function create()
    {
        return view('admin.testcar2013868899.create');
    }

    public function edit(TestCar2013868899 $testcar2013868899)
    {
        return view('admin.testcar2013868899.edit', compact('testcar2013868899'));
    }

    public function show(TestCar2013868899 $testcar2013868899)
    {
        return view('admin.testcar2013868899.show', compact('testcar2013868899'));
    }
}
