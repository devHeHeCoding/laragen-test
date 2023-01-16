<?php

namespace App\Http\Controllers\GeneratedTraits;

trait TestControllerTrait
{
    public function index()
    {
        return view('admin.testcar544368840.index');
    }

    public function create()
    {
        return view('admin.testcar544368840.create');
    }

    public function edit(TestCar544368840 $testcar544368840)
    {
        return view('admin.testcar544368840.edit', compact('testcar544368840'));
    }

    public function show(TestCar544368840 $testcar544368840)
    {
        return view('admin.testcar544368840.show', compact('testcar544368840'));
    }
}
