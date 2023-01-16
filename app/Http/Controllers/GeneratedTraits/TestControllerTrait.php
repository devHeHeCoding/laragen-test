<?php

namespace App\Http\Controllers\GeneratedTraits;

use App\Models\TestCar146246608;

trait TestControllerTrait
{
    public function index()
    {
        return view('admin.testcar146246608.index');
    }

    public function create()
    {
        return view('admin.testcar146246608.create');
    }

    public function edit(TestCar146246608 $testcar146246608)
    {
        return view('admin.testcar146246608.edit', compact('testcar146246608'));
    }

    public function show(TestCar146246608 $testcar146246608)
    {
        return view('admin.testcar146246608.show', compact('testcar146246608'));
    }
}
