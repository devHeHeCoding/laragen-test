<?php

namespace App\Http\Controllers\GeneratedTraits;

use App\Models\TestCar799656306;

trait TestControllerTrait
{
    public function index()
    {
        return view('admin.testcar799656306.index');
    }

    public function create()
    {
        return view('admin.testcar799656306.create');
    }

    public function edit(TestCar799656306 $testcar799656306)
    {
        return view('admin.testcar799656306.edit', compact('testcar799656306'));
    }

    public function show(TestCar799656306 $testcar799656306)
    {
        return view('admin.testcar799656306.show', compact('testcar799656306'));
    }
}
