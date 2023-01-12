<?php

namespace App\Http\Controllers\GeneratedTraits;

trait TestControllerTrait
{
    public function index()
    {
        return view('admin.testcar584987925.index');
    }

    public function create()
    {
        return view('admin.testcar584987925.create');
    }

    public function edit(TestCar584987925 $testcar584987925)
    {
        return view('admin.testcar584987925.edit', compact('testcar584987925'));
    }

    public function show(TestCar584987925 $testcar584987925)
    {
        return view('admin.testcar584987925.show', compact('testcar584987925'));
    }
}
