<?php

namespace App\Http\Controllers\GeneratedTraits;

trait TestControllerTrait
{
    public function index()
    {
        return view('admin.testcar210297364.index');
    }

    public function create()
    {
        return view('admin.testcar210297364.create');
    }

    public function edit(TestCar210297364 $testcar210297364)
    {
        return view('admin.testcar210297364.edit', compact('testcar210297364'));
    }

    public function show(TestCar210297364 $testcar210297364)
    {
        return view('admin.testcar210297364.show', compact('testcar210297364'));
    }
}
