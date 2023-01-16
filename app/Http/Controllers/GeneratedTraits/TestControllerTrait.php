<?php

namespace App\Http\Controllers\GeneratedTraits;

use App\Models\TestCar70042958;

trait TestControllerTrait
{
    public function index()
    {
        return view('admin.testcar70042958.index');
    }

    public function create()
    {
        return view('admin.testcar70042958.create');
    }

    public function edit(TestCar70042958 $testcar70042958)
    {
        return view('admin.testcar70042958.edit', compact('testcar70042958'));
    }

    public function show(TestCar70042958 $testcar70042958)
    {
        return view('admin.testcar70042958.show', compact('testcar70042958'));
    }
}
