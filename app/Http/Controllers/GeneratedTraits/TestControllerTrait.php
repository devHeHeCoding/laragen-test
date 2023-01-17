<?php

namespace App\Http\Controllers\GeneratedTraits;

use App\Models\TestCar1197168722;

trait TestControllerTrait
{
    public function index()
    {
        return view('admin.testcar1197168722.index');
    }

    public function create()
    {
        return view('admin.testcar1197168722.create');
    }

    public function edit(TestCar1197168722 $testcar1197168722)
    {
        return view('admin.testcar1197168722.edit', compact('testcar1197168722'));
    }

    public function show(TestCar1197168722 $testcar1197168722)
    {
        return view('admin.testcar1197168722.show', compact('testcar1197168722'));
    }
}
