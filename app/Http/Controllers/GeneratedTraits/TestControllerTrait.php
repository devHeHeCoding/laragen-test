<?php

namespace App\Http\Controllers\GeneratedTraits;

use App\Models\TestCar473784101;

trait TestControllerTrait
{
    public function index()
    {
        return view('admin.testcar473784101.index');
    }

    public function create()
    {
        return view('admin.testcar473784101.create');
    }

    public function edit(TestCar473784101 $testcar473784101)
    {
        return view('admin.testcar473784101.edit', compact('testcar473784101'));
    }

    public function show(TestCar473784101 $testcar473784101)
    {
        return view('admin.testcar473784101.show', compact('testcar473784101'));
    }
}
