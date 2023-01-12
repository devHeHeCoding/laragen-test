<?php

namespace App\Http\Controllers\GeneratedTraits;

trait TestControllerTrait
{
    public function index()
    {
        return view('admin.testcar454794994.index');
    }

    public function create()
    {
        return view('admin.testcar454794994.create');
    }

    public function edit(TestCar454794994 $testcar454794994)
    {
        return view('admin.testcar454794994.edit', compact('testcar454794994'));
    }

    public function show(TestCar454794994 $testcar454794994)
    {
        return view('admin.testcar454794994.show', compact('testcar454794994'));
    }
}
