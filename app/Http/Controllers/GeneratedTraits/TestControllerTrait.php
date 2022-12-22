<?php

namespace App\Http\Controllers\GeneratedTraits;

trait TestControllerTrait
{
    public function index()
    {
        return view('admin.testcar1223290678.index');
    }

    public function create()
    {
        return view('admin.testcar1223290678.create');
    }

    public function edit(TestCar1223290678 $testcar1223290678)
    {
        return view('admin.testcar1223290678.edit', compact('testcar1223290678'));
    }

    public function show(TestCar1223290678 $testcar1223290678)
    {
        return view('admin.testcar1223290678.show', compact('testcar1223290678'));
    }
}
