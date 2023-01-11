<?php

namespace App\Http\Controllers\GeneratedTraits;

trait TestControllerTrait
{
    public function index()
    {
        return view('admin.testcar968074012.index');
    }

    public function create()
    {
        return view('admin.testcar968074012.create');
    }

    public function edit(TestCar968074012 $testcar968074012)
    {
        return view('admin.testcar968074012.edit', compact('testcar968074012'));
    }

    public function show(TestCar968074012 $testcar968074012)
    {
        return view('admin.testcar968074012.show', compact('testcar968074012'));
    }
}
