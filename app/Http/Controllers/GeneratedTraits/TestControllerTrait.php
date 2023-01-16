<?php

namespace App\Http\Controllers\GeneratedTraits;

use App\Models\TestCar1952538869;

trait TestControllerTrait
{
    public function index()
    {
        return view('admin.testcar1952538869.index');
    }

    public function create()
    {
        return view('admin.testcar1952538869.create');
    }

    public function edit(TestCar1952538869 $testcar1952538869)
    {
        return view('admin.testcar1952538869.edit', compact('testcar1952538869'));
    }

    public function show(TestCar1952538869 $testcar1952538869)
    {
        return view('admin.testcar1952538869.show', compact('testcar1952538869'));
    }
}
