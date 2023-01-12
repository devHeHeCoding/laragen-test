<?php

namespace App\Http\Controllers\GeneratedTraits;

trait TestControllerTrait
{
    public function index()
    {
        return view('admin.testcar1508391256.index');
    }

    public function create()
    {
        return view('admin.testcar1508391256.create');
    }

    public function edit(TestCar1508391256 $testcar1508391256)
    {
        return view('admin.testcar1508391256.edit', compact('testcar1508391256'));
    }

    public function show(TestCar1508391256 $testcar1508391256)
    {
        return view('admin.testcar1508391256.show', compact('testcar1508391256'));
    }
}
