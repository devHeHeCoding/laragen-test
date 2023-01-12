<?php

namespace App\Http\Controllers\GeneratedTraits;

trait TestControllerTrait
{
    public function index()
    {
        return view('admin.testcar2083545807.index');
    }

    public function create()
    {
        return view('admin.testcar2083545807.create');
    }

    public function edit(TestCar2083545807 $testcar2083545807)
    {
        return view('admin.testcar2083545807.edit', compact('testcar2083545807'));
    }

    public function show(TestCar2083545807 $testcar2083545807)
    {
        return view('admin.testcar2083545807.show', compact('testcar2083545807'));
    }
}
