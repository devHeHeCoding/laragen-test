<?php

namespace App\Http\Controllers\GeneratedTraits;

trait TestControllerTrait
{
    public function index()
    {
        return view('admin.testcar1635964799.index');
    }

    public function create()
    {
        return view('admin.testcar1635964799.create');
    }

    public function edit(TestCar1635964799 $testcar1635964799)
    {
        return view('admin.testcar1635964799.edit', compact('testcar1635964799'));
    }

    public function show(TestCar1635964799 $testcar1635964799)
    {
        return view('admin.testcar1635964799.show', compact('testcar1635964799'));
    }
}
