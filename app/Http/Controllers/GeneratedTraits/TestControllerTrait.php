<?php

namespace App\Http\Controllers\GeneratedTraits;

trait TestControllerTrait
{
    public function index()
    {
        return view('admin.testcar696121985.index');
    }

    public function create()
    {
        return view('admin.testcar696121985.create');
    }

    public function edit(TestCar696121985 $testcar696121985)
    {
        return view('admin.testcar696121985.edit', compact('testcar696121985'));
    }

    public function show(TestCar696121985 $testcar696121985)
    {
        return view('admin.testcar696121985.show', compact('testcar696121985'));
    }
}
