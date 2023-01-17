<?php

namespace App\Http\Controllers\GeneratedTraits;

use App\Models\TestCar183690541;

trait TestControllerTrait
{
    public function index()
    {
        return view('admin.testcar183690541.index');
    }

    public function create()
    {
        return view('admin.testcar183690541.create');
    }

    public function edit(TestCar183690541 $testcar183690541)
    {
        return view('admin.testcar183690541.edit', compact('testcar183690541'));
    }

    public function show(TestCar183690541 $testcar183690541)
    {
        return view('admin.testcar183690541.show', compact('testcar183690541'));
    }
}
