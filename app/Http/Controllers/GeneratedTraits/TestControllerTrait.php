<?php
namespace App\Http\Controllers\GeneratedTraits;

use App\Models\TestCar176624470;

trait TestControllerTrait
{
    public function index()
    {
        return view('admin.testcar176624470.index');
    }

    public function create()
    {
        return view('admin.testcar176624470.create');
    }

    public function edit(TestCar176624470 $testCar176624470)
    {
        return view('admin.testcar176624470.edit', compact('testCar176624470'));
    }

    public function show(TestCar176624470 $testCar176624470)
    {
        return view('admin.testcar176624470.show', compact('testCar176624470'));
    }
}
