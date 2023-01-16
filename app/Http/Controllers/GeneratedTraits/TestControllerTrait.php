<?php

namespace App\Http\Controllers\GeneratedTraits;

use App\Models\TestCar1262855775;

trait TestControllerTrait
{
    public function index()
    {
        return view('admin.testcar1262855775.index');
    }

    public function create()
    {
        return view('admin.testcar1262855775.create');
    }

    public function edit(TestCar1262855775 $testcar1262855775)
    {
        return view('admin.testcar1262855775.edit', compact('testcar1262855775'));
    }

    public function show(TestCar1262855775 $testcar1262855775)
    {
        return view('admin.testcar1262855775.show', compact('testcar1262855775'));
    }
}
