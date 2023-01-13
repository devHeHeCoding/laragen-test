<?php

namespace App\Http\Controllers\GeneratedTraits;

use App\Models\TestCar1063551290;

trait TestControllerTrait
{
    public function index()
    {
        return view('admin.testcar1063551290.index');
    }

    public function create()
    {
        return view('admin.testcar1063551290.create');
    }

    public function edit(TestCar1063551290 $testcar1063551290)
    {
        return view('admin.testcar1063551290.edit', compact('testcar1063551290'));
    }

    public function show(TestCar1063551290 $testcar1063551290)
    {
        return view('admin.testcar1063551290.show', compact('testcar1063551290'));
    }
}
