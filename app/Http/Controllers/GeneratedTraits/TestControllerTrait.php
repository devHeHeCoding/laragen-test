<?php

namespace App\Http\Controllers\GeneratedTraits;

trait TestControllerTrait
{
    public function index()
    {
        return view('admin.testcar1549481132.index');
    }

    public function create()
    {
        return view('admin.testcar1549481132.create');
    }

    public function edit(TestCar1549481132 $testcar1549481132)
    {
        return view('admin.testcar1549481132.edit', compact('testcar1549481132'));
    }

    public function show(TestCar1549481132 $testcar1549481132)
    {
        return view('admin.testcar1549481132.show', compact('testcar1549481132'));
    }
}
