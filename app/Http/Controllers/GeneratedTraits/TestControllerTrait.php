<?php

namespace App\Http\Controllers\GeneratedTraits;

use App\Models\TestCar106143352;

trait TestControllerTrait
{
    public function index()
    {
        return view('admin.testcar106143352.index');
    }

    public function create()
    {
        return view('admin.testcar106143352.create');
    }

    public function edit(TestCar106143352 $testcar106143352)
    {
        return view('admin.testcar106143352.edit', compact('testcar106143352'));
    }

    public function show(TestCar106143352 $testcar106143352)
    {
        return view('admin.testcar106143352.show', compact('testcar106143352'));
    }
}
