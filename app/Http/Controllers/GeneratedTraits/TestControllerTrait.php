<?php

namespace App\Http\Controllers\GeneratedTraits;

use App\Models\TestCar839028854;

trait TestControllerTrait
{
    public function index()
    {
        return view('admin.testcar839028854.index');
    }

    public function create()
    {
        return view('admin.testcar839028854.create');
    }

    public function edit(TestCar839028854 $testcar839028854)
    {
        return view('admin.testcar839028854.edit', compact('testcar839028854'));
    }

    public function show(TestCar839028854 $testcar839028854)
    {
        return view('admin.testcar839028854.show', compact('testcar839028854'));
    }
}
