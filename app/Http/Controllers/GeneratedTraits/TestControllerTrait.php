<?php

namespace App\Http\Controllers\GeneratedTraits;

use App\Models\TestCar1733562679;

trait TestControllerTrait
{
    public function index()
    {
        return view('admin.testcar1733562679.index');
    }

    public function create()
    {
        return view('admin.testcar1733562679.create');
    }

    public function edit(TestCar1733562679 $testcar1733562679)
    {
        return view('admin.testcar1733562679.edit', compact('testcar1733562679'));
    }

    public function show(TestCar1733562679 $testcar1733562679)
    {
        return view('admin.testcar1733562679.show', compact('testcar1733562679'));
    }
}
