<?php

namespace App\Http\Controllers\GeneratedTraits;

trait TestControllerTrait
{
    public function index()
    {
        return view('admin.testcar639799408.index');
    }

    public function create()
    {
        return view('admin.testcar639799408.create');
    }

    public function edit(TestCar639799408 $testcar639799408)
    {
        return view('admin.testcar639799408.edit', compact('testcar639799408'));
    }

    public function show(TestCar639799408 $testcar639799408)
    {
        return view('admin.testcar639799408.show', compact('testcar639799408'));
    }
}
