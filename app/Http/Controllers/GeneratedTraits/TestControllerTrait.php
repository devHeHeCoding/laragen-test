<?php

namespace App\Http\Controllers\GeneratedTraits;

trait TestControllerTrait
{
    public function index()
    {
        return view('admin.testcar243962112.index');
    }

    public function create()
    {
        return view('admin.testcar243962112.create');
    }

    public function edit(TestCar243962112 $testcar243962112)
    {
        return view('admin.testcar243962112.edit', compact('testcar243962112'));
    }

    public function show(TestCar243962112 $testcar243962112)
    {
        return view('admin.testcar243962112.show', compact('testcar243962112'));
    }
}
