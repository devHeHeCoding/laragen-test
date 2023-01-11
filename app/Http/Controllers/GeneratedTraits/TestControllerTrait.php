<?php

namespace App\Http\Controllers\GeneratedTraits;

trait TestControllerTrait
{
    public function index()
    {
        return view('admin.testcar1856867084.index');
    }

    public function create()
    {
        return view('admin.testcar1856867084.create');
    }

    public function edit(TestCar1856867084 $testcar1856867084)
    {
        return view('admin.testcar1856867084.edit', compact('testcar1856867084'));
    }

    public function show(TestCar1856867084 $testcar1856867084)
    {
        return view('admin.testcar1856867084.show', compact('testcar1856867084'));
    }
}
