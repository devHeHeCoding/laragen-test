<?php
namespace App\Http\Controllers\GeneratedTraits;

use App\Models\TestCar172238442;

trait TestControllerTrait
{
    public function index()
    {
        return view('admin.testcar172238442.index');
    }

    public function create()
    {
        return view('admin.testcar172238442.create');
    }

    public function edit(TestCar172238442 $testCar172238442)
    {
        return view('admin.testcar172238442.edit', compact('testCar172238442'));
    }

    public function show(TestCar172238442 $testCar172238442)
    {
        return view('admin.testcar172238442.show', compact('testCar172238442'));
    }
}
