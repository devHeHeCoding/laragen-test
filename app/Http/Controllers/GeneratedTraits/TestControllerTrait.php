<?php

namespace App\Http\Controllers\GeneratedTraits;

trait TestControllerTrait
{
    public function index()
    {
        return view('admin.testcar1777383326.index');
    }

    public function create()
    {
        return view('admin.testcar1777383326.create');
    }

    public function edit(TestCar1777383326 $testcar1777383326)
    {
        return view('admin.testcar1777383326.edit', compact('testcar1777383326'));
    }

    public function show(TestCar1777383326 $testcar1777383326)
    {
        return view('admin.testcar1777383326.show', compact('testcar1777383326'));
    }
}
