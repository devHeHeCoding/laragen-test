<?php

namespace App\Http\Controllers\GeneratedTraits;

use App\Models\TestCar973799022;

trait TestControllerTrait
{
    public function index()
    {
        return view('admin.testcar973799022.index');
    }

    public function create()
    {
        return view('admin.testcar973799022.create');
    }

    public function edit(TestCar973799022 $testcar973799022)
    {
        return view('admin.testcar973799022.edit', compact('testcar973799022'));
    }

    public function show(TestCar973799022 $testcar973799022)
    {
        return view('admin.testcar973799022.show', compact('testcar973799022'));
    }
}
