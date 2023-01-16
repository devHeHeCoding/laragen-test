<?php

namespace App\Http\Controllers\GeneratedTraits;

use App\Models\TestCar2141572300;

trait TestControllerTrait
{
    public function index()
    {
        return view('admin.testcar2141572300.index');
    }

    public function create()
    {
        return view('admin.testcar2141572300.create');
    }

    public function edit(TestCar2141572300 $testcar2141572300)
    {
        return view('admin.testcar2141572300.edit', compact('testcar2141572300'));
    }

    public function show(TestCar2141572300 $testcar2141572300)
    {
        return view('admin.testcar2141572300.show', compact('testcar2141572300'));
    }
}
