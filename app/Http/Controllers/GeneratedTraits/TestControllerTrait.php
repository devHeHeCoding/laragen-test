<?php

namespace App\Http\Controllers\GeneratedTraits;

trait TestControllerTrait
{
    public function index()
    {
        return view('admin.testcar2097014541.index');
    }

    public function create()
    {
        return view('admin.testcar2097014541.create');
    }

    public function edit(TestCar2097014541 $testcar2097014541)
    {
        return view('admin.testcar2097014541.edit', compact('testcar2097014541'));
    }

    public function show(TestCar2097014541 $testcar2097014541)
    {
        return view('admin.testcar2097014541.show', compact('testcar2097014541'));
    }
}
