<?php

namespace App\Http\Controllers\GeneratedTraits;

trait TestControllerTrait
{
    public function index()
    {
        return view('admin.testcar719684078.index');
    }

    public function create()
    {
        return view('admin.testcar719684078.create');
    }

    public function edit(TestCar719684078 $testcar719684078)
    {
        return view('admin.testcar719684078.edit', compact('testcar719684078'));
    }

    public function show(TestCar719684078 $testcar719684078)
    {
        return view('admin.testcar719684078.show', compact('testcar719684078'));
    }
}
